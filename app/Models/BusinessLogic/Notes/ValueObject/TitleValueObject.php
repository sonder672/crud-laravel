<?php

namespace App\Models\BusinessLogic\Notes\ValueObject;

use Exception;

final class TitleValueObject
{
    private $title;

    public function __construct(string $title)
    {
        $this->setTitle($title);
    }

    private function setTitle(string $title)
    {
        if ($title == null)
        {
            throw new Exception("Excepción");
        }
        $this->title = $title;
    }

    public function title()
    {
        return $this->title;
    }
}