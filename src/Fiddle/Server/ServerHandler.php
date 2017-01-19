<?php
namespace Fiddle\Server;

use Monolog\Logger;
use Fiddle\Client\Client;

class ServerHandler {
    protected $log;
    protected $client;

    public function __construct(Client $client) {
        $this->log = new Logger("main");
        $this->client = $client;
    }

    public function createServer() {
        $this->log->info('Initiating Client');
        $c = $this->client->getClient();
        $this->log->info('Creating Server with client: ');
    }
}
