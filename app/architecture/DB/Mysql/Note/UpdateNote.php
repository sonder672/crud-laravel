<?php

namespace App\Architecture\DB\Mysql\Note;

use App\Architecture\BusinessLogic\Notes\NotesEntity;
use App\Architecture\DB\Contract\Note\IUpdateNote;
use Illuminate\Support\Facades\DB;

final class UpdateNote implements IUpdateNote
{
    public function updateNote(NotesEntity $attributes, string $uuid)
    {
        return DB::select(
            'call SP_updateNote(?, ?, ?, ?)',
            array(
                $uuid,
                $attributes->title(),
                $attributes->content(),
                $attributes->userId()
            )
        );
    } 
}