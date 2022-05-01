<?php

namespace App\Architecture\DB\Contract\User;

use App\Models\BusinessLogic\User\ValueObject\EmailValueObject;

interface ILogin
{
    public function login(EmailValueObject $email);
}