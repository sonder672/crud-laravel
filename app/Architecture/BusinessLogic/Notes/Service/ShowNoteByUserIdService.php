<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\DB\Contract\Note\IShowNoteByUserId;
use App\CommandPattern\ICommand;

final class ShowNoteByUserIdService implements ICommand
{
    private $showByIdNoteDataBase;
    private $userId;

    public function __construct(IShowNoteByUserId $showByIdNoteDataBase, string $userId)
    {
        $this->showByIdNoteDataBase = $showByIdNoteDataBase;
        $this->userId = $userId;
    }

    public function __invoke()
    {
        return $this->showByIdNoteDataBase->showNoteByUserId($this->userId);
    }
}