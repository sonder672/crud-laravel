<?php

namespace App\Models\BusinessLogic\Notes\ValueObject;

use Exception;

final class ContentValueObject
{
    private $content;

    public function __construct(string $content)
    {
        $this->setContent($content);
    }

    private function setContent(string $content)
    {
        if ($content == null)
        {
            throw new Exception("Excepción");
        }
        $this->content = $content;
    }

    public function content()
    {
        return $this->content;
    }
}