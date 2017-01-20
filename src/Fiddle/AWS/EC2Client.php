<?php
namespace Fiddle\AWS;

use Fiddle\Client\ServerClient;

class EC2Client implements ServerClient {
    protected $sdk;
    public function __construct() {
        $this->sharedConfig = [
            'region'  => 'eu-central-1',
            'version' => 'latest'
        ];
        $this->sdk = new \Aws\Sdk($this->sharedConfig);
    }

    public function getServerClient() {
        return $this->sdk->createEc2();
    }
}
