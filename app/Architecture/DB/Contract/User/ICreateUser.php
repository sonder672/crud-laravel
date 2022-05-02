<?php

namespace App\Architecture\DB\Contract\User;

use App\Architecture\BusinessLogic\User\UserEntity;

interface ICreateUser
{
    public function createUser(UserEntity $attributes);
}