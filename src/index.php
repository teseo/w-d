<?php

require_once 'vendor/autoload.php';
// Parameters passed using a named array:
$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);

//$client->set('foo', 'bar');
$value = $client->get('foo');
var_dump($value);
