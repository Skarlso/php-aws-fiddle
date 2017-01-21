<?php
namespace Fiddle\Stack;

use Monolog\Logger;
use Fiddle\Client\StackClient;

class StackHandler {
    protected $log;
    protected $client;

    public function __construct(StackClient $client) {
        $this->log = new Logger("main");
        $this->client = $client;
    }

    public function createStack() {
        $this->log->info('Creating Cloud Formation client.');
        $cf = $this->client->getStackClient();
        $this->log->info('Initiating stack creation.');
    }
}
