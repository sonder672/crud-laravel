<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Architecture\BusinessLogic\Notes\ValueObject\TitleValueObject;
use App\Architecture\DB\Contract\Note\ICreateNote;
use App\CommandPattern\ICommand;
use Illuminate\Http\Request;

final class CreateNoteService implements ICommand
{
    private $createNoteDataBase;
    private $request;

    public function __construct(ICreateNote $createNoteDataBase, Request $request)
    {
        $this->createNoteDataBase = $createNoteDataBase;
        $this->request = $request;
    }

    public function __invoke()
    {
        $noteEntity = new NotesEntity(
            $this->request->userId,
            new ContentValueObject($this->request->content),
            new TitleValueObject($this->request->title)
        );

        $this->createNoteDataBase->createNote($noteEntity);

        return response()->json([
            'status' => 200,
            'message' => 'Nota creada satisfactoriamente'
        ]);
    }
}