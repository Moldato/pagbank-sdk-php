<?php 

namespace Moldato\PagBankSDK\Model\Entity;

class CreditCard implements Method {
  public function __construct(){
    $this->id = 3;
    $this->name = 'creditCard';
  }
}
