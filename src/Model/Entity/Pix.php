<?php 

namespace Moldato\PagBankSDK\Model\Entity;

class Pix implements Method {
  public function __construct(){
    $this->id = 4;
    $this->name = 'pix';
  }
}
