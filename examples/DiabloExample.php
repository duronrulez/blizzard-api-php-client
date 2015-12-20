<?php

namespace Examples\LogansUA\BlizzardApi;

use LogansUA\BlizzardApi\BlizzardClient;
use LogansUA\BlizzardApi\Service\Diablo;

require_once __DIR__.'/../vendor/autoload.php';

$client = new BlizzardClient('apiKey', 'locale', 'region');

$diablo = new Diablo($client);

$response = $diablo->getItemDataById('Unique_Shoulder_103_x1');

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();
