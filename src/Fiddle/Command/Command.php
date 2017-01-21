<?php

namespace Fiddle\Command;

interface Command
{
    public function execute($params);
    public function getName();
}
