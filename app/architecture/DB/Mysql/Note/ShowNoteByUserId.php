<?php

namespace App\Architecture\DB\Mysql\Note;

use App\Architecture\DB\Contract\Note\IShowNoteByUserId;
use Illuminate\Support\Facades\DB;

final class ShowNoteByUserId implements IShowNoteByUserId
{
    public function showNoteByUserId(string $userId)
    {
        return DB::select(
            'call SP_getSpecificNote(?)',
            array($userId)
        );
    }
}