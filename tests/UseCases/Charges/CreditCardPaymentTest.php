<?php
use PHPUnit\Framework\TestCase;

class CreditCardPaymentTest extends TestCase {
  public function testAny(){
    $stack = ['a'];
    $this->assertEmpty($stack);
  }
}