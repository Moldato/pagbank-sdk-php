<?php

namespace Moldato\PagBankSDK;

class Prepare {
  private $sessionId;

  public function __construct(string $sessionId){
    $this->sessionId = $sessionId;
  }

  public function initPagBankLib(): array {
    return [
      '<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>',
      "<script> PagSeguroDirectPayment.setSessionId('{$this->sessionId}'); </script>"
    ];
  }
}