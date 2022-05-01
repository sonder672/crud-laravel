<?php

namespace App\Architecture\DB\Contract\User;

use App\Models\BusinessLogic\User\UserEntity;

interface ICreateUser
{
    public function createUser(UserEntity $attributes);
}