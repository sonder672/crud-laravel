<?php

namespace App\Architecture\BusinessLogic\User\Service;

use App\Architecture\DB\Contract\User\ILogin;
use App\CommandPattern\ICommand;
use App\Models\BusinessLogic\User\ValueObject\EmailValueObject;
use Illuminate\Http\Request;

final class LoginUserService implements ICommand
{
    private $loginDataBase;
    private $request;

    public function __construct(ILogin $loginDataBase, Request $request)
    {
        $this->loginDataBase = $loginDataBase;
        $this->request = $request;
    }

    public function __invoke()
    {
        $emailValueObject = new EmailValueObject($this->request->email);

        $verifyAccount = $this->loginDataBase->Login(
            $emailValueObject->email()
        );

        if (!password_verify($this->request->password, $verifyAccount->password))
        {
            throw new \DomainException("Contraseña incorrecta");
        }

        session( ['id' => $verifyAccount->id] );

        return response()->json([
            'status' => 200,
            'message' => '¡Es bueno volverte a ver!'
        ]);
    }
}