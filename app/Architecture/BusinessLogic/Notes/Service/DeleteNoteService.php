<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\DB\Contract\Note\IDeleteNote;
use App\CommandPattern\ICommand;

final class DeleteNoteService implements ICommand
{
    private $deleteNoteDataBase;
    private $noteUuid;

    public function __construct(IDeleteNote $deleteNoteDataBase, string $noteUuid)
    {
        $this->deleteNoteDataBase = $deleteNoteDataBase;
        $this->noteUuid = $noteUuid;
    }

    public function __invoke()
    {
        $this->deleteNoteDataBase->deleteNote($this->noteUuid);

        return response()->json([
            'status' => 200,
            'message' => 'Nota eliminada satisfactoriamente'
        ]);
    }
}