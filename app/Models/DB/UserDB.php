<?php

namespace App\Models\DB;

use Illuminate\Support\Facades\DB;

final class UserDB
{
    public function registerUser(string $password, string $email, string $lastName, string $id, string $name, $age)
    {
        return DB::select(
            'call SP_registerUser(?, ?, ?, ?, ?, ?)', 
            array($id, $name, $lastName, $age, $email, $password)
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