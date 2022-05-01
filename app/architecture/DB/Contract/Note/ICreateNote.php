<?php

namespace App\Architecture\DB\Contract\Note;

use App\Architecture\BusinessLogic\Notes\NotesEntity;

interface ICreateNote
{
    public function createNote(NotesEntity $attributes);
}