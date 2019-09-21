<?php

require_once 'general.php';

$codes = $invoker->generateAllModelCodes();

file_put_contents(dirname(__DIR__) . '/config/autoload/models.generated.php', $codes);

header('Content-Type: text/plain; charset=utf-8;');
echo $codes;


