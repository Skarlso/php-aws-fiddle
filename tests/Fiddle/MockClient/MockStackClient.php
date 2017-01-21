<?php

namespace Fiddle\Test\MockClient;

use Fiddle\Client\StackClient;

class MockStackClient implements StackClient {
    public function __construct() {

    }

    public function getStackClient() {
        printf("Mock client getClient was called.");
        return true;
    }
}
