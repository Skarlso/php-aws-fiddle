<?php
namespace Fiddle\EC2;

use Monolog\Logger;

class EC2Handler {
    protected $log;
    protected $sharedConfig;
    protected $sdk;

    public function __construct() {
        $this->log = new Logger("main");
        $this->sharedConfig = [
            'region'  => 'eu-central-1',
            'version' => 'latest'
        ];
        $this->sdk = new \Aws\Sdk($this->sharedConfig);
    }

    public function create_ec2() {
        $this->log->info('Initiating AWS S3 client.');
        $ec2_client = $this->sdk->createEc2();
    }
}
