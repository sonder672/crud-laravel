<?php

namespace App\Architecture\DB\Mysql\Note;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\DB\Contract\Note\ICreateNote;
use Illuminate\Support\Facades\DB;

final class CreateNote implements ICreateNote
{
    public function createNote(NotesEntity $attributes)
    {
        return DB::select(
            'call SP_addNote(?, ?, ?)',
            array(
                $attributes->title(),
                $attributes->content(),
                $attributes->userId()
            )
        );
    }
}