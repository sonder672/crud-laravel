<?php

namespace App\Models\DB;

use Illuminate\Support\Facades\DB;

final class NotesDB
{
    public function createNote(string $title, string $content, string $userId)
    {
        return DB::select(
            'call SP_addNote(?, ?, ?)', 
            array($title, $content, $userId)
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