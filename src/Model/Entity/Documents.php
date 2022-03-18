<?php 

namespace Moldato\PGB\Model\Entity;

enum DocumentType {
  case CPF;
  case CNPJ;
}

class Documents {
  public DocumentType $type;
  public string $value;
}
