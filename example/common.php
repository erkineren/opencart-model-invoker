<?php

use OpencartApi\Http\ClientBuilder;
use OpencartApi\ModelInvoker;

require dirname(__DIR__) . '/vendor/autoload.php';


$config = include_once __DIR__ . '/config.php';


$invokerv2302 = new ModelInvoker((new ClientBuilder())
    ->setBaseUrl($config['v2302']['baseUrl'])
    ->setUsername($config['v2302']['adminUsername'])
    ->setPassword($config['v2302']['adminPassword'])
    ->build());
$invokerv3020 = new ModelInvoker((new ClientBuilder())
    ->setBaseUrl($config['v3020']['baseUrl'])
    ->setUsername($config['v3020']['adminUsername'])
    ->setPassword($config['v3020']['adminPassword'])
    ->build());
$invokerv3037 = new ModelInvoker((new ClientBuilder())
    ->setBaseUrl($config['v3037']['baseUrl'])
    ->setUsername($config['v3037']['adminUsername'])
    ->setPassword($config['v3037']['adminPassword'])
    ->build());

function _yaz($data = '', $die = true)
{
    echo '<pre>';
    if (is_bool($data) || is_null($data) || $data === "") var_dump($data);
    else print_r($data);
    echo '</pre>';
    if ($die) {
        die;
    }
}

