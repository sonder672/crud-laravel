<?php

namespace App\Architecture\BusinessLogic\User;

use App\Architecture\BusinessLogic\User\ValueObject\EmailValueObject;
use App\Architecture\BusinessLogic\User\ValueObject\PasswordValueObject;

final class UserEntity
{
    private $id;
    private $name;
    private $lastName;
    private $age;
    private $email;
    private $password;

    public function __construct(string $id, string $name, string $lastName, string $age, EmailValueObject $email, PasswordValueObject $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email->email();
        $this->password = $password->password();
    }

    public function id()
    {
        return $this->id;
    }
    
    public function name()
    {
        return $this->name;
    }

    public function lastName()
    {
        return $this->lastName;
    }

    public function age()
    {
        return $this->age;
    }

    public function email()
    {
        return $this->email;
    }

    public function password()
    {
        return $this->password;
    }
}
