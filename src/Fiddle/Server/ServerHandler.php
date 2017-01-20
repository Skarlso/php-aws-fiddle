<?php
namespace Fiddle\Server;

use Monolog\Logger;
use Fiddle\Client\ServerClient;

class ServerHandler {
    protected $log;
    protected $client;

    public function __construct(ServerClient $client) {
        $this->log = new Logger("main");
        $this->client = $client;
    }

    public function createServer() {
        $this->log->info('Initiating Client');
        $c = $this->client->getServerClient();
        $this->log->info('Creating Server with client: ');
    }
}
