<?php

namespace Moldato\PagBankSDK;

use Moldato\PagBankSDK\Contract\InputPublisher;
use Moldato\PagBankSDK\Contract\Publisher;
use Moldato\PagBankSDK\Model\Entity\Credentials;

class Session {
  private Credentials $credentials;
  private Publisher $publisher;
  private string $sessionId;
  /**
   * @param credentials Credentials
   */
  public function __construct( Credentials $credentials ) {
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
    $this->sessionId = $response['id'];
    return $response['id'];
  }
}
