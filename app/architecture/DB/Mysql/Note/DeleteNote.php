<?php

namespace App\Architecture\DB\Mysql\Note;

use App\Architecture\DB\Contract\Note\IDeleteNote;
use Illuminate\Support\Facades\DB;

final class DeleteNote implements IDeleteNote
{
    public function deleteNote(string $uuid)
    {
        return DB::select(
            'call SP_removeNote(?)',
            array($uuid)
        );
    }
}