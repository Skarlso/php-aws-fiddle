<?php
namespace Fiddle\AWS;

class EC2Client {
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
