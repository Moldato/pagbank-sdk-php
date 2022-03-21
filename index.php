<?php
require __DIR__ . '/vendor/autoload.php';

use Moldato\PagBankSDK\AppCredentials;
use Moldato\PagBankSDK\AppSession;
use Moldato\PagBankSDK\SellerCredentials;
use Moldato\PagBankSDK\Prepare;
use Moldato\PagBankSDK\SellerSession;

$sellerCredentials = new SellerCredentials;
$sellerCredentials->email = 'alysonforever@gmail.com';
$sellerCredentials->token = '953D361099A44089B60B355A9084D72F';

$sellerSession = new SellerSession($sellerCredentials);

$prepare = new Prepare($sellerSession->create());
var_dump($prepare->initPagBankLib());

/** TESTAR SESSAO DO APP */
$appCredentials = new AppCredentials;
$appCredentials->appId = 'app1088596492';
$appCredentials->appKey = 'E3CB565F5353D24BB4B13FA0F6291C32';

$appSession = new AppSession($appCredentials);

$prepare = new Prepare($appSession->create());
var_dump($prepare->initPagBankLib());
