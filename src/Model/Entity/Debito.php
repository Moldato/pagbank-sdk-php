<?php 

namespace Moldato\PagBankSDK\Model\Entity;

class Debito implements Method {
  public function __construct(){
    $this->id = 2;
    $this->name = 'eft';
  }
}