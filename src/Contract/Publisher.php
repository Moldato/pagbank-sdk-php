<?php

namespace Moldato\PagBankSDK\Contract;

interface Publisher {
  public function sendPost(InputPublisher $inputPublisher): array;
}

class InputPublisher {
  public string $endpoint;
  public array $params;
}