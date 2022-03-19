<?php 

namespace Moldato\PagBankSDK\Model\Entity;

class Item {
  public string $id;
  public string $description; /** Formato: Decimal, com duas casas decimais separadas por ponto (p.e., 1234.56), maior que 0.00 e menor ou igual a 9999999.00. */
  public float $amount; /** Formato: Um número inteiro maior ou igual a 1 e menor ou igual a 999. */
  public float $quantity;
}
