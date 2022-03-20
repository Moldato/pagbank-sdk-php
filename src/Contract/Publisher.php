<?php

namespace Moldato\PagBankSDK\Contract;

interface Publisher {
  public function sendPost(InputPublisher $inputPublisher): array;
}

class InputPublisher {
  public $endpoint;
  public $params;
}