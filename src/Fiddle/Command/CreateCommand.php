<?php

namespace Fiddle\Command;

class CreateCommand implements Command
{
    protected $name = "create";
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getName()
    {
        return $this->name;
    }

    public function execute($params)
    {
        printf("Running command: %s\n", $this->name);
        $stack = $this->container->get("Fiddle\Stack\StackHandler");
        $stack->createStack($params["name"]);
    }

    public function help()
    {
        printf("Zis iz my help.\n");
    }
}
