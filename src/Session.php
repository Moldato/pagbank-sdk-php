<?php

namespace Moldato\PagBankSDK;

class Session {
  private string $email;
  private string $token;
  /**
   * @param email string
   * @param token string
   */
  function __construct(string $email, string $token){
    $this->email = $email;
    $this->token = $token;
    $this->getSession();
  }

  public function getId(){

  }

  protected function getSession(){

  }
}