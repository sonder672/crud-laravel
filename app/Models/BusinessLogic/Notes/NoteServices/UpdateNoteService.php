<?php

namespace App\Models\BusinessLogic\Notes\UpdateNoteService;
use App\Models\BusinessLogic\Notes\NotesEntity;
use App\Models\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Models\BusinessLogic\Notes\ValueObject\TitleValueObject;
use App\Models\DB\NotesDB;

final class UpdateNoteService
{
    private $modelDataBase;

    public function __construct(NotesDB $modelDataBase)
    {
        $this->modelDataBase = $modelDataBase;
    }

    public function UpdateNote(object $dto)
    {
        $noteEntity = new NotesEntity(
            $dto->userId,
            new ContentValueObject($dto->content),
            new TitleValueObject($dto->title)
        );
        $this->modelDataBase->updateNote($noteEntity);
    }
}