<?php 

namespace Moldato\PGB\Model\Entity;

class Boleto implements Method {
  public function __construct(){
    $this->id = 1;
    $this->name = 'boleto';
  }
}