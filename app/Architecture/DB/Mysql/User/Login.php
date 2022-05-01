<?php

namespace App\Architecture\DB\Mysql\User;

use App\Architecture\DB\Contract\User\ILogin;
use App\Models\BusinessLogic\User\ValueObject\EmailValueObject;
use Illuminate\Support\Facades\DB;

final class Login implements ILogin
{
    public function login(EmailValueObject $email)
    {
        return DB::select(
            'call SP_loginUser(?)',
            array($email)
        );
    }
}