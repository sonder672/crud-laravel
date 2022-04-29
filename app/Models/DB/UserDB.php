<?php

namespace App\Models\DB;

use App\Models\BusinessLogic\User\UserEntity;
use Illuminate\Support\Facades\DB;

final class UserDB
{
    public function registerUser(UserEntity $attributes)
    {
        return DB::select(
            'call SP_registerUser(?, ?, ?, ?, ?, ?)', 
            array($attributes->id, $attributes->name, $attributes->lastName, $attributes->age, $attributes->email, $attributes->password)
        );
    }

    public function login(string $email, string $password)
    {
        return DB::select(
            'call SP_loginUser(?, ?)',
            array($email, $password)
        );
    }
}