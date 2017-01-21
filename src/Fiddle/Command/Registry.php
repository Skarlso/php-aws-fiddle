<?php

namespace Fiddle\Command;

class Registry
{
    protected $commandRegistry = [];

    public function addCommand($name, Command $command)
    {
        $this->commandRegistry[$name] = $command;
    }

    public function getCommand($name)
    {
        if (array_key_exists($name, $this->commandRegistry)) {
            return $this->commandRegistry[$name];
        }
        return null;
    }

    public function listCommands()
    {
        return array_values($this->commandRegistry);
    }
}
