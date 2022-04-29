<?php

namespace App\Models\BusinessLogic\Notes\NoteService;
use App\Models\BusinessLogic\Notes\NotesEntity;
use App\Models\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Models\BusinessLogic\Notes\ValueObject\TitleValueObject;
use App\Models\DB\NotesDB;

final class AddNoteService
{
    private $modelDataBase;

    public function __construct(NotesDB $modelDataBase)
    {
        $this->modelDataBase = $modelDataBase;
    }

    public function AddNote(object $dto)
    {
        $noteEntity = new NotesEntity(
            $dto->userId,
            new ContentValueObject($dto->content),
            new TitleValueObject($dto->title)
        );
        $this->modelDataBase->createNote($noteEntity);
    }
}