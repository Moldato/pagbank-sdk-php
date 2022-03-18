<?php
namespace Test;

use Moldato\PGB\Model\UseCases\Session;
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase {
  function testGetSession(){
    $stack= [];
    $this->assertEmpty($stack);
  }
}