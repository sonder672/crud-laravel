<?php

namespace App\Architecture\BusinessLogic\User\Service;

use App\Architecture\DB\Contract\User\ILogin;
use App\CommandPattern\ICommand;
use App\Architecture\BusinessLogic\User\ValueObject\EmailValueObject;
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
       try{ $verifyAccount = $this->loginDataBase->Login(
        new EmailValueObject($this->request->email)
    );
    //Ciclo para recorrer lo devuelto por la Base de Datos.
    foreach ($verifyAccount as $verifyAccounts) {

        if (!password_verify($this->request->password, $verifyAccounts->password)) {
            throw new \DomainException("Contraseña incorrecta");
        }

        session(['id' => $verifyAccounts->id]);

        return response()->json([
            'status' => 200,
            'message' => '¡Es bueno volverte a ver!',
            'id' => session('id')
        ]);
    }
    
    throw new \DomainException("Correo no registrado");

       }catch(\Exception $e){
        if(isset($e)){
            return response()->json([
                'status' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }
       }
    }
}
