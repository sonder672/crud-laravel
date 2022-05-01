<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Architecture\BusinessLogic\Notes\ValueObject\TitleValueObject;
use App\Architecture\DB\Contract\Note\IUpdateNote;
use Illuminate\Http\Request;

final class UpdateNoteService
{
    private $updateNoteDataBase;

    public function __construct(IUpdateNote $updateNoteDataBase)
    {
        $this->updateNoteDataBase = $updateNoteDataBase;
    }

    public function __invoke(Request $request, string $uuid)
    {
        $noteEntity = new NotesEntity(
            $request->userId,
            new ContentValueObject($request->content),
            new TitleValueObject($request->title)
        );

        $this->updateNoteDataBase->updateNote($noteEntity, $uuid);
    }
}