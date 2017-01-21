<?php
namespace Fiddle\Test;

use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/../../cfg/config.php";

class ConfigTest extends TestCase
{
    public function testConfigValueAndAvailability()
    {
        $this->assertEquals("fiddle.db", PATH_TO_SQLITE_FILE);
    }
}
