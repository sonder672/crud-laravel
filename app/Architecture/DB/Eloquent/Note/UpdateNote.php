<?php

namespace App\Architecture\DB\Eloquent\Note;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\DB\Contract\Note\IUpdateNote;
use App\Models\Note;

final class UpdateNote implements IUpdateNote
{
    private $modelNote;

    public function __construct()
    {
        $this->modelNote = new Note();
    }

    public function updateNote(NotesEntity $attributes, string $uuid)
    {
        $this->modelNote
             ->findOrFail($uuid)
             ->update([
                'title' => $attributes->title(),
                'content' => $attributes->content(),
                'id_user' => $attributes->userId()
            ]);
    }
}
