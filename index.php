<?php
require __DIR__ . '/vendor/autoload.php';

use Moldato\PagBankSDK\Prepare;

$prepare = new Prepare('any');

$prepare->getPagBankLib();

echo $prepare->getPagBankLib();