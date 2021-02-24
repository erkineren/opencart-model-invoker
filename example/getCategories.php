<?php

require_once __DIR__ . '/common.php';


$products = AdminModelCatalogCategory::getCategories()->getRawResponse();
header('Content-Type: text/plain; charset=utf-8;');
print_r($products);

