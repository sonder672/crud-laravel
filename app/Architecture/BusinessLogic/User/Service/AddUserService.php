<?php

namespace App\Architecture\BusinessLogic\User\Service;

use App\Architecture\DB\Contract\User\ICreateUser;
use App\CommandPattern\ICommand;
use App\Models\BusinessLogic\User\UserEntity;
use App\Models\BusinessLogic\User\ValueObject\EmailValueObject;
use App\Models\BusinessLogic\User\ValueObject\PasswordValueObject;
use Illuminate\Http\Request;

final class AddUserService implements ICommand
{
    private $createUserDataBase;
    private $request;

    public function __construct(ICreateUser $createUserDataBase, Request $request)
    {
        $this->createUserDataBase = $createUserDataBase;
        $this->request = $request;
    }

    public function __invoke()
    {
        $userEntity = new UserEntity(
            $this->request->id,
            $this->request->name,
            $this->request->lastName,
            $this->request->age,
            new EmailValueObject($this->request->email), //email = santiago = excepción.
            new PasswordValueObject($this->request->password),           
        );

        $this->createUserDataBase->createUser($userEntity);

        return response()->json([
            'status' => 200,
            'message' => 'Usuario creado satisfactoriamente'
        ]);
    }
}