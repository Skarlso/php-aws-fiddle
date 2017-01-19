<?php
namespace Fiddle\Test\Server;

use PHPUnit\Framework\TestCase;
use Fiddle\Server\ServerHandler;
use Fiddle\AWS\EC2Client;

class ServerHandlerTest extends TestCase {
    public function testFirstTest() {
        $stub = $this->createMock(EC2Client::class);
        $stub->method('getClient')
             ->willReturn([]);
        $handler = new ServerHandler($stub);
        $handler->createServer();
    }
}
