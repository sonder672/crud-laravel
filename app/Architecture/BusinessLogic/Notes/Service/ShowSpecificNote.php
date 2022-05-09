<?php

namespace App\Architecture\BusinessLogic\Notes\Service;

use App\Architecture\DB\Contract\Note\IShowSpecificNote;
use App\CommandPattern\ICommand;

final class ShowSpecificNote implements ICommand
{
    private $uuid;
    private $obtainSpecificNote;

    public function __construct(string $uuid, IShowSpecificNote $obtainSpecificNote)
    {
        $this->uuid = $uuid;
        $this->obtainSpecificNote = $obtainSpecificNote;
    }

    public function __invoke()
    {
        return response()->json([
            'status' => 200,
            'message' => 'Nota eliminada satisfactoriamente',
            'contentNote' => $this->obtainSpecificNote->obtainSpecificNote($this->uuid)
        ]);
    }
}