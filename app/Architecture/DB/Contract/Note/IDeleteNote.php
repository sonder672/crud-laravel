<?php

namespace App\Architecture\DB\Contract\Note;

interface IDeleteNote
{
    public function deleteNote(string $uuid);
}