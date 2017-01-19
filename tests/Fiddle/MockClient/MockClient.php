<?php

namespace Fiddle\Test\MockClient;

use Fiddle\Client\Client;

class MockClient implements Client {
    public function __construct() {

    }

    public function getClient() {
        printf("Mock client getClient was called.");
        return true;
    }
}
