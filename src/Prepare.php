<?php

namespace Moldato\PGB;

class Prepare {
  private $sessionId;

  public function __construct(string $sessionId){
    $this->sessionId = $sessionId;
  }

  public static function getPagBankLib(){    
    return '<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>';
  }

  public function setSessionId(){
    return "
      <script>
        PagSeguroDirectPayment.setSessionId('".$this->sessionId."');
      </script>
    ";
  }
}