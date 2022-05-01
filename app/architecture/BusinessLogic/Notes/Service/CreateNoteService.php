<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Architecture\BusinessLogic\Notes\ValueObject\TitleValueObject;
use App\Architecture\DB\Contract\Note\ICreateNote;
use Illuminate\Http\Request;

final class CreateNoteService
{
    private $createNoteDataBase;

    public function __construct(ICreateNote $createNoteDataBase)
    {
        $this->createNoteDataBase = $createNoteDataBase;
    }

    public function __invoke(Request $request)
    {
        $noteEntity = new NotesEntity(
            $request->userId,
            new ContentValueObject($request->content),
            new TitleValueObject($request->title)
        );

        $this->createNoteDataBase->createNote($noteEntity);
    }
}