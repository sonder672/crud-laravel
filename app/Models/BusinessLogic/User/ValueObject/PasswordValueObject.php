<?php

namespace App\Models\BusinessLogic\User\ValueObject;

final class PasswordValueObject
{
    private $password;
    
    public function __construct(string $password)
    {
        $this->setPassword($password);
    }

    private function setPassword(string $password)
    {
        //Falta verificación, como que tenga mínimo 8 carácteres.
        $this->password = $password;
    }

    public function password()
    {
        return $this->password;
    }
}