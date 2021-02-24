<?php

require_once __DIR__ . '/common.php';

//_yaz($invokerv2302->getInfo()->getResult());
//_yaz($invokerv3020->getInfo()->getResult());
//_yaz($invokerv3037->getInfo()->getResult());

$models = new \OpencartApi\ModelContainer\v3037\OpencartModelContainer($invokerv3037);

$res = $models->getAdminModelCatalogProduct()->getProducts();
_yaz($res->getResult());

