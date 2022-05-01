<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\DB\Contract\Note\IDeleteNote;

final class DeleteNoteService
{
    private $deleteNoteDataBase;

    public function __construct(IDeleteNote $deleteNoteDataBase)
    {
        $this->deleteNoteDataBase = $deleteNoteDataBase;
    }

    public function __invoke(string $uuid)
    {
        $this->deleteNoteDataBase->deleteNote($uuid);
    }
}