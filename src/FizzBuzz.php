<?php
// FizzBuzzクラスの抽象クラスです
abstract class BaseFizzBuzz {
  abstract public function execute(int $number);
  abstract protected function isMultipleOfThree(int $number): bool;
  abstract protected function isMultipleOfFive(int $number): bool;
}

class FizzBuzz extends BaseFizzBuzz {
  public function execute(int $number)
  {
    if ($this->isMultipleOfThree($number) && $this->isMultipleOfFive($number)) {
      return 'FizzBuzz';
    }

    if ($this->isMultipleOfThree($number)) {
      return 'Fizz';
    }

    if ($this->isMultipleOfFive($number)) {
      return 'Buzz';
    }

    return $number;
  }

  protected function isMultipleOfThree(int $number): bool
  {
    return $number % 3 === 0;
  }

  protected function isMultipleOfFive(int $number): bool
  {
    return $number % 5 === 0;
  }
}