<?php

namespace Moldato\PagBankSDK;

use Moldato\PagBankSDK\Contract\InputPublisher;

class AppSession {
  private $credentials;
  private $publisher;

  public function __construct( AppCredentials $credentials ) {
    $this->credentials = $credentials;
    $this->publisher = new PublisherAdapter();
  }

  public function create(): string {
    $inputPublisher = new InputPublisher;
    $inputPublisher->endpoint = 'sessions';
    $inputPublisher->params = [
      'appId' => $this->credentials->appId,
      'appKey' => $this->credentials->appKey
    ];

    $response = $this->publisher->sendPost($inputPublisher);
    return $response['id'];
  }
}
