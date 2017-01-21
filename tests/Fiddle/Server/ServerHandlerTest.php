<?php
namespace Fiddle\Test\Server;

use PHPUnit\Framework\TestCase;
use Fiddle\Server\ServerHandler;
use Fiddle\Test\MockClient\MockServerClient;

class ServerHandlerTest extends TestCase {
    public function testFirstTest() {
        $mockClient = new MockServerClient();
        $handler = new ServerHandler($mockClient);
        $handler->createServer();
    }
}
