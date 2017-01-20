<?php

namespace Fiddle\Test\MockClient;

use Fiddle\Client\ServerClient;

class MockServerClient implements ServerClient {
    public function __construct() {

    }

    public function getServerClient() {
        printf("Mock client getClient was called.");
        return true;
    }
}
