<?php

require_once 'general.php';

$products = AdminModelCatalogProduct::getProducts(['filter_name' => 'HP'])->getRawResponse();
header('Content-Type: text/plain; charset=utf-8;');
print_r($products);

