<?php

namespace App\CommandPattern;

final class Invoker
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function addCommand(ICommand $command)
    {
        array_push($this->commands, $command);
    }

    public function runCommand()
    {
        foreach($this->commands as $command)
        {
            return $command->__invoke();
        }
    }
}