<?php

namespace App\Models\BusinessLogic\Notes\DestroyNoteService;
use App\Models\BusinessLogic\Notes\NotesEntity;
use App\Models\DB\NotesDB;

final class DestroyNoteService
{
    private $modelDataBase;

    public function __construct(NotesDB $modelDataBase)
    {
        $this->modelDataBase = $modelDataBase;
    }

    public function DeleteNote($uuid)
    {
        $this->modelDataBase->deleteNote($uuid);
    }
}