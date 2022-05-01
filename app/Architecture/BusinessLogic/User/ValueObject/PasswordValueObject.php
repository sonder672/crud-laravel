<?php

namespace App\Models\BusinessLogic\User\ValueObject;
use Exception;
use Illuminate\Support\Facades\Hash;

final class PasswordValueObject
{
    private $password;
    
    public function __construct(string $password)
    {
        $this->setPassword($password);
    }

    private function setPassword(string $password)
    {
        if(\strlen($password) < 8){
            throw new Exception('La clave debe tener minimo 8 caracteres');
        }
        $this->password = Hash::make($password);
    }

    public function password()
    {
        return $this->password;
    }
}