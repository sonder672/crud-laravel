<?php

namespace App\Architecture\DB\Contract\Note;

interface IShowNoteByUserId
{
    public function showNoteByUserId(string $userId);
}