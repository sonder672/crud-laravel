<?php

namespace App\Models\BusinessLogic\User\Service;

use App\Models\BusinessLogic\User\UserEntity;
use App\Models\DB\UserDB;

final class LoginUserService
{
    private $modelDataBase;

    public function __construct(UserDB $modelDataBase)
    {
        $this->modelDataBase = $modelDataBase;
    }

    public function LoginUser(object $dto)
    {
        $this->modelDataBase->Login($dto->email, $dto->password);
    }
}