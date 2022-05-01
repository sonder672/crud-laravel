<?php

namespace App\CommandPattern;

interface ICommand
{
    public function __invoke();
}