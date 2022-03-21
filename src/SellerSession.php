<?php

namespace Moldato\PagBankSDK;

use Moldato\PagBankSDK\Contract\InputPublisher;

class SellerSession {
  private $credentials;
  private $publisher;

  public function __construct( SellerCredentials $credentials ) {
    $this->credentials = $credentials;
    $this->publisher = new PublisherAdapter();
  }

  public function create(): string {
    $inputPublisher = new InputPublisher;
    $inputPublisher->endpoint = 'sessions';
    $inputPublisher->params = [
      'email' => $this->credentials->email,
      'token' => $this->credentials->token
    ];

    $response = $this->publisher->sendPost($inputPublisher);
    return $response['id'];
  }
}
