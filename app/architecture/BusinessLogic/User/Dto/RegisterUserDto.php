<?php

namespace App\Models\BusinessLogic\User\Dto;

final class RegisterUserDto
{
    private $id;
    private $name;
    private $lastName;
    private $age;
    private $email;
    private $password;

    public function __construct(string $id, string $name, string $lastName, string $age, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
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
