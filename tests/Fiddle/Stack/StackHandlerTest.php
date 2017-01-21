<?php
namespace Fiddle\Test\Stack;

use PHPUnit\Framework\TestCase;
use Fiddle\Stack\StackHandler;
use Fiddle\Test\MockClient\MockStackClient;

class StackHandlerTest extends TestCase {
    public function testFirstTest() {
        $mockClient = new MockStackClient();
        $handler = new StackHandler($mockClient);
        $handler->createStack();
    }
}
