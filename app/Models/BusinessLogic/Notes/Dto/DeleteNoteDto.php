<?php

namespace App\Models\BusinessLogic\Notes\Dto;

final class DeleteNote
{
    private $uuid;

    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    public function uuid()
    {
        return $this->uuid;
    }
}