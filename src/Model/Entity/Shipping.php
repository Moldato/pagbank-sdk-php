<?php

namespace Moldato\PagBankSDK\Model\Entity;

class Shipping {
  /**
   * True: Os parâmetros de shipping.address deverão ser passados
   * False: os parâmetros de shipping.address não deverão ser passados.
   */
  public bool $addressRequired;
  public string $street;
  public string $number;
  public string $district;
  public string $city;
  public string $state;
  public string $country;
  public string $postalCode;
  public string $complement;
  /**
   * Tipo de frete. Informa o tipo de frete a ser usado para o envio do produto. 
   * Esta informação é usada pelo PagSeguro para calcular, junto aos Correios, o valor do frete a partir do peso dos itens. 
   * Os valores aceitos e seus significados são: 
   * 1 - Encomenda normal (PAC), 
   * 2 - SEDEX, 
   * 3 - Tipo de frete não especificado.
   * Formato: Um número inteiro entre 1 e 3.
   */
  public string $type;
  /**
   * Valor total do frete. Informa o valor total de frete do pedido. Caso este valor seja especificado, o PagSeguro irá assumi-lo como valor do frete e não fará nenhum cálculo referente aos pesos e valores de entrega dos itens.
   * Formato: Decimal, com duas casas decimais separadas por ponto (p.e., 1234.56), maior que 0.00 e menor ou igual a 9999999.00.
   */
  public float $cost;
}