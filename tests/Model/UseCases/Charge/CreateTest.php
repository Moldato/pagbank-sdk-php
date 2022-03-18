<?php

namespace Test;

use Moldato\PGB\Model\UseCases\Charge\Create;
use Moldato\PGB\Model\UseCases\Session;
use PHPUnit\Framework\TestCase;

// class CredentialSpy {
//   private string $token;
//   private string $email;

//   function __construct(string $token, string $email = ''){
//     $this->token = $token;
//     $this->email = $email;
//   }
// }

class CreateTest extends TestCase {

  public function testSutIsInstanceOfCreate(){
    $sut = new Create();
    $this->assertInstanceOf(Create::class, $sut);
  }

  public function testShouldCallWithCredential(){
    // $credentialsSpy = new CredentialSpy('any_token', 'any_mail');
    // $sut = new Create($credentialsSpy);
    $sut = new Create();
    $this->assertInstanceOf(Create::class, $sut);
    // $sut->setPurchage(1, "Motivo do pagamento");
  }

  public function testGetSession(){
    $sut = new Create();
    return true;
    // $sut->getSession();
  }
}

// class PGBCredentials {
//   private string $token;
//   public function __construct(string $token){
    
//   }
// }

// class Create extends Charge {
  
//   public function __construct(PGBCredentials $credentials){
//     parent::__construct($credentials);
//   }

//   public function creditCard(int $installments = 1){
//     $this->installments = $installments;
//   }
// }

// class Charge {
//   protected PGBCredentials $credentials;
//   public function __construct(PGBCredentials $credentials){
//     $this->credentials = $credentials;
//   }
// }

// class CreditCard {
//   protected int $installments = 1;
// }

