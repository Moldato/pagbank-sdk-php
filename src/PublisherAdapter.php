<?php

namespace Moldato\PagBankSDK;

use Moldato\PagBankSDK\Contract\Publisher;
use Moldato\PagBankSDK\Contract\InputPublisher;
use GuzzleHttp\Client as GuzzClient;

class PublisherAdapter implements Publisher {
  private $client;

  public function __construct(){
    $this->client = new GuzzClient([
      'base_uri'=> 'https://ws.sandbox.pagseguro.uol.com.br/v2/',
      'timeout'=>3.0
    ]);
  }

  public function sendPost(InputPublisher $inputPublisher): array {
    // https://ws.sandbox.pagseguro.uol.com.br/v2/sessions?email=alysonforever@gmail.com&token=953D361099A44089B60B355A9084D72F
    $response = $this->client->request(
      'POST', 
      $inputPublisher->endpoint, 
      [
        'query' => $inputPublisher->params,
        'headers' => [
          'Accept' => '*/*',
          'Accept-Encoding' => 'gzip, deflate, br',
          'Connection' => 'keep-alive'
        ],
      ]
    );

    $xml = simplexml_load_string($response->getBody(), "SimpleXMLElement", LIBXML_NOCDATA);
    $json = json_encode($xml);
    $decode = json_decode($json, TRUE);
    
    return $decode;
  }
}