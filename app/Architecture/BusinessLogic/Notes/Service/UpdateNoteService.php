<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Architecture\BusinessLogic\Notes\ValueObject\TitleValueObject;
use App\Architecture\DB\Contract\Note\IUpdateNote;
use App\CommandPattern\ICommand;
use Illuminate\Http\Request;

final class UpdateNoteService implements ICommand
{
    private $updateNoteDataBase;
    private $request;
    private $noteUuid;

    public function __construct(IUpdateNote $updateNoteDataBase, Request $request, string $noteUuid)
    {
        $this->updateNoteDataBase = $updateNoteDataBase;
        $this->request = $request;
        $this->noteUuid = $noteUuid;
    }

    public function __invoke()
    {
        $noteEntity = new NotesEntity(
            $this->request->userId,
            new ContentValueObject($this->request->content),
            new TitleValueObject($this->request->title)
        );

        $this->updateNoteDataBase->updateNote($noteEntity, $this->noteUuid);

        return response()->json([
            'status' => 200,
            'message' => 'Nota actualizada satisfactoriamente'
        ]);
    }
}