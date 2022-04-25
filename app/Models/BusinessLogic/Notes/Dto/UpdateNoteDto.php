<?php

namespace App\Models\BusinessLogic\Notes\Dto;

final class UpdateNoteDto
{
    private $uuid;
    private $title;
    private $content;
    private $userId;

    public function __construct(string $uuid, string $title, string $content, string $userId)
    {
        $this->uuid = $uuid;
        $this->title = $title;
        $this->content = $content;
        $this->userId = $userId;
    }

    public function title()
    {
        return $this->title;
    }

    public function content()
    {
        return $this->content;
    }

    public function userId()
    {
        return $this->userId;
    }

    public function uuid()
    {
        return $this->uuid;
    }
}