<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class PagbankSDKPHP {
  public function getSessionId(string $email, string $token){
    return 'any_session_id';
  }
}

class PagbankSDKPhpTest extends TestCase {
  public function test_should_get_session_id(){
    $pagbank = new PagbankSDKPHP();
    $email = 'any_email@gmail.com';
    $token = 'any_token';
    $sessionId = $pagbank->getSessionId($email, $token);
    $this->assertEquals($sessionId, 'any_session_id');
  }
}