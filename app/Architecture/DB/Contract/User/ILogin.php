<?php

namespace App\Architecture\DB\Contract\User;

use App\Architecture\BusinessLogic\User\ValueObject\EmailValueObject;

interface ILogin
{
    public function login(EmailValueObject $email);
}