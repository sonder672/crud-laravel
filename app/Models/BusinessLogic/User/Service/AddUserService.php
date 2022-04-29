<?php

namespace App\Models\BusinessLogic\User\Service;

use App\Models\BusinessLogic\User\UserEntity;
use App\Models\BusinessLogic\User\ValueObject\EmailValueObject;
use App\Models\BusinessLogic\User\ValueObject\PasswordValueObject;
use App\Models\DB\UserDB;

final class AddUserService
{
    private $modelDataBase;

    public function __construct(UserDB $modelDataBase)
    {
        $this->modelDataBase = $modelDataBase;
    }

    public function addNewUser(object $dto)
    {
        $userEntity = new UserEntity(
            $dto->id,
            $dto->name,
            $dto->lastName,
            $dto->age,
            new EmailValueObject($dto->email), //email = santiago = excepción.
            new PasswordValueObject($dto->password),           
        );

        $this->modelDataBase->registerUser($userEntity);
    }
}