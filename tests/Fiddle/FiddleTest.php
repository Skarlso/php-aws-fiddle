<?php
namespace Fiddle\Test;

use PHPUnit\Framework\TestCase;
use Fiddle\Fiddle;

class FiddleTest extends TestCase {
    public function testFirstTest() {
        $fiddle = new Fiddle();
        $fiddle->start();
        $this->assertEquals(true, true);
    }
}
