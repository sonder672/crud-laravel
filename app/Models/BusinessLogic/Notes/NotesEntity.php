<?php

namespace App\Models\BusinessLogic\Notes;

use App\Models\BusinessLogic\Notes\ValueObject\ContentValueObject;
use App\Models\BusinessLogic\Notes\ValueObject\TitleValueObject;

final class NotesEntity
{
    private $title;
    private $content;
    private $userId;

    public function __construct(string $userId, ContentValueObject $content, TitleValueObject $title)
    {
        $this->title = $title->title();
        $this->content = $content->content();
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
}