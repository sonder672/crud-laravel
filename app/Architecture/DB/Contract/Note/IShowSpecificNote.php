<?php

namespace App\Architecture\DB\Contract\Note;

interface IShowSpecificNote
{
    public function obtainSpecificNote(string $uuid);
}