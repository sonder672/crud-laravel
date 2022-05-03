<?php

namespace App\Architecture\BusinessLogic\User\ValueObject;

use Exception;

final class EmailValueObject
{
    private $email;
    
    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    private function setEmail(string $email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Ingrese un email válido");
        }
        $this->email = $email;
    }

    public function email()
    {
        return $this->email;
    }
}