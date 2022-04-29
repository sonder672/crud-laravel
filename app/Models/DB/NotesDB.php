<?php

namespace App\Models\DB;

use Illuminate\Support\Facades\DB;
use App\Models\BusinessLogic\Notes\NotesEntity;
final class NotesDB
{
    public function createNote(NotesEntity $attributes)
    {
        return DB::select(
            'call SP_addNote(?, ?, ?)', 
            array($attributes->title, $attributes->content, $attributes->userId)
        );
    }

    public function updateNote(string $uuid, string $title, string $content, string $userId)
    {
        return DB::select(
            'call SP_updateNote(?, ?, ?, ?)', 
            array($uuid, $title, $content, $userId)
        );
    }

    public function deleteNote(string $uuid)
    {
        return DB::select(
            'call SP_removeNote(?)', 
            array($uuid)
        );
    }

    public function readNoteByUuid(string $uuid)
    {
        return DB::select(
            'call SP_getSpecificNote(?)', 
            array($uuid)
        );
    }

    public function readNote()
    {
        //Sentencia pura. Se cambiará más adelante.
        return DB::select('SELECT * FROM notes');
    }
}