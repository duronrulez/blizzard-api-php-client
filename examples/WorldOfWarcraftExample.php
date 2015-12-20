<?php

namespace Examples\LogansUA\BlizzardApi;

use LogansUA\BlizzardApi\BlizzardClient;
use LogansUA\BlizzardApi\Service\WorldOfWarcraft;

require_once __DIR__.'/../vendor/autoload.php';

$client = new BlizzardClient('apiKey', 'locale', 'region');

$wow = new WorldOfWarcraft($client);

$response = $wow->getGuild('test-realm', 'test-guild', [
    'fields' => 'achievements,challenge',
]);

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();
