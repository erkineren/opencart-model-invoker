<?php

use OpencartApi\Http\ClientBuilder;
use OpencartApi\ModelInvoker;
use OpencartApi\Models\BaseModel;

require dirname(__DIR__) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
$dotenv->load();

$client = (new ClientBuilder())
    ->setBaseUrl(getenv('BASE_URL'))
    ->setUsername(getenv('USERNAME'))
    ->setPassword(getenv('PASSWORD'))
    ->build();
$invoker = new ModelInvoker($client);
BaseModel::setInvoker($invoker);