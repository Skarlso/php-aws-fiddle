<?php
namespace Fiddle;
require 'vendor/autoload.php';

use Monolog\Logger;

class Fiddle {
    public $log;

    public function __construct() {
        $this->log = new Logger("main");
    }

    public function start() {
        $this->log->info('Initiating AWS S3 client.');

        $s3 = new \Aws\S3\S3Client([
            'version' => 'latest',
            'region'  => 'eu-central-1'
        ]);
    }
}
