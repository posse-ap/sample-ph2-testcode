<?php

require_once 'src/FizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  public function testFizz()
  {
    $fizzBuzz = new FizzBuzz();
    $this->assertTrue($fizzBuzz->execute(3) === "Fizz");
  }

  public function testBuzz()
  {
    $fizzBuzz = new FizzBuzz();
    $this->assertTrue($fizzBuzz->execute(5) === "Buzz");
  }

  public function testFizzBuzz()
  {
    $fizzBuzz = new FizzBuzz();
    $this->assertTrue($fizzBuzz->execute(15) === "FizzBuzz");
  }

  public function testNotFizzAndBuzz()
  {
    $fizzBuzz = new FizzBuzz();
    $this->assertTrue($fizzBuzz->execute(1) === 1);
  }
}