#!/usr/local/opt/php70/bin/php
<?php
// Include the SDK using the Composer autoloader
require 'vendor/autoload.php';

use Monolog\Logger;

$log = new Logger('main');
$log->info('Initiating AWS S3 client.');

$s3 = new Aws\S3\S3Client([
    'version' => 'latest',
    'region'  => 'eu-central-1'
]);
