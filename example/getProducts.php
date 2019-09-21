<?php

require_once 'general.php';

$products = AdminModelCatalogProduct::getProducts()->getRawResponse();
header('Content-Type: text/plain; charset=utf-8;');
print_r($products);

