# Opencart Model Invoker

Access all opencart model's methods and invoke them remotely, use it like a api.

## Installation

##### Build

```shell script
clone repository
composer install
```

##### Setup Opencart

- You must have minimum v2.3.0.2 installed opencart system. https://github.com/opencart/opencart/releases

##### Copy Invoker Controller to Opencart

- Copy all files in `opencart-put-catalog-controller` to `"{OpencartRootPath}/catalog/controller/"`

##### Usage

```php

use OpencartApi\Http\ClientBuilder;
use OpencartApi\ModelInvoker;

require __DIR__ . '/vendor/autoload.php';


$config = include_once __DIR__ . '/config.php';

$invoker = new ModelInvoker((new ClientBuilder())
    ->setBaseUrl($config['v2302']['baseUrl'])
    ->setUsername($config['v2302']['adminUsername'])
    ->setPassword($config['v2302']['adminPassword'])
    ->build());

$models = new \OpencartApi\ModelContainer\v3037\OpencartModelContainer($invoker);

$res = $models->getAdminModelCatalogProduct()->getProducts();

print_r($res->getResult());
```
