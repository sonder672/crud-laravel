<?php

namespace App\Architecture\DB\Eloquent\Note;

use App\Architecture\DB\Contract\Note\IShowSpecificNote;
use App\Models\Note;

final class ShowSpecificNote implements IShowSpecificNote
{
    private $modelNote;

    public function __construct()
    {
        $this->modelNote = new Note();
    }

    public function obtainSpecificNote(string $uuid)
    {
        return $this->modelNote->findOrFail($uuid);
    }
}