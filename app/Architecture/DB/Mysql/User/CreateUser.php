<?php

namespace App\Architecture\DB\Mysql\User;

use App\Architecture\BusinessLogic\DB\Contract\User\ICreateUser;
use App\Architecture\BusinessLogic\User\UserEntity;
use Illuminate\Support\Facades\DB;

final class CreateUser implements ICreateUser
{
    public function createUser(UserEntity $attributes)
    {
        return DB::select(
            'call SP_registerUser(?, ?, ?, ?, ?, ?)',
            array(
                $attributes->id,
                $attributes->name,
                $attributes->lastName,
                $attributes->age,
                $attributes->email,
                $attributes->password
            )
        );
    }
}
