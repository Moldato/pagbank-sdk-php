<?php 

namespace Moldato\PGB\Model\Entity;

class Customer {
  public string $hash;
  public string $name;
  public string $email;
  public Phone $phone;
  public Documents $documents;
}