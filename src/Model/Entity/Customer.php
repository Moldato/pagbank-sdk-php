<?php 

namespace Moldato\PagBankSDK\Model\Entity;

class Customer {
  public string $hash; /** Identificador do vendedor (fingerprint) gerado pelo JavaScript do PagSeguro. Formato: Obtido a partir de uma chamada javascript PagseguroDirectPayment.onSenderHashReady(). */
  public string $name;
  public string $email;
  public Phone $phone;
  public Documents $documents;
}