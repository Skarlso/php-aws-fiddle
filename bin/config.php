<?php
use function DI\object;
use function DI\get;

return [
    'Fiddle\Client\ServerClient' => DI\object('Fiddle\AWS\EC2Client')
];
