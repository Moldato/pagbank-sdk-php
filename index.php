<?php
require __DIR__ . '/vendor/autoload.php';

use Moldato\PagBankSDK\Credentials;
use Moldato\PagBankSDK\Prepare;
use Moldato\PagBankSDK\Session;

$credentials = new Credentials;
$credentials->email = 'alysonforever@gmail.com';
$credentials->token = '953D361099A44089B60B355A9084D72F';

$session = new Session($credentials);

$sessionId = $session->create();
$prepare = new Prepare($sessionId);
var_dump($prepare->initPagBankLib());

echo $sessionId;
