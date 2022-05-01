<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\DB\Contract\Note\IShowNoteByUserId;

final class ShowNoteByUserIdService
{
    private $showByIdNoteDataBase;

    public function __construct(IShowNoteByUserId $showByIdNoteDataBase)
    {
        $this->showByIdNoteDataBase = $showByIdNoteDataBase;
    }

    public function __invoke(string $uuid)
    {
        $this->showByIdNoteDataBase->showNoteByUserId($uuid);
    }
}