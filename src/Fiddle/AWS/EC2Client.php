<?php
namespace Fiddle\AWS;

use Fiddle\Client\Client;

class EC2Client implements Client {
    protected $sdk;
    public function __construct() {
        $this->sharedConfig = [
            'region'  => 'eu-central-1',
            'version' => 'latest'
        ];
        $this->sdk = new \Aws\Sdk($this->sharedConfig);
    }

    public function getClient() {
        return $this->sdk->createEc2();
    }
}
