<?php

namespace Fiddle\AWS;

use Fiddle\Client\StackClient;

class CFClient implements StackClient {
    protected $sdk;
    public function __construct() {
        $this->sharedConfig = [
            'region'  => 'eu-central-1',
            'version' => 'latest'
        ];
        $this->sdk = new \Aws\Sdk($this->sharedConfig);
    }

    public function getStackClient() {
        return $this->sdk->createCloudFormation();
    }
}
