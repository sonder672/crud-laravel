<?php

namespace App\Architecture\DB\Contract\Note;

use App\Architecture\BusinessLogic\Notes\NotesEntity;

interface IUpdateNote
{
    public function updateNote(NotesEntity $attributes, string $uuid);
}