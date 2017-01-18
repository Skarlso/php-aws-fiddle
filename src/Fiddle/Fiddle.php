<?php
namespace Fiddle;

use Monolog\Logger;

class Fiddle {
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

    public function start() {
        $this->log->info('Initiating AWS S3 client.');
        $s3 = $this->sdk->createS3();
    }
}
