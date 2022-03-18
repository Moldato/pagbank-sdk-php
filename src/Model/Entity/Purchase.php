<?php 

namespace Moldato\PGB\Model\Entity;

class Purchase {
  public int $id;
  /**
   * Valor extra. Especifica um valor extra que deve ser adicionado ou subtraído ao valor total do pagamento. Esse valor pode representar uma taxa extra a ser cobrada no pagamento ou um desconto a ser concedido, caso o valor seja negativo.
   * Formato: Decimal (positivo ou negativo), com duas casas decimais separadas por ponto (p.e., 1234.56 ou -1234.56), maior ou igual a -9999999.00 e menor ou igual a 9999999.00. Quando negativo, este valor não pode ser maior ou igual à soma dos valores dos produtos.
   */
  public float $extraAmount;
}
