<?php

// FizzBuzzクラスの抽象クラスです
// FizzBuzzクラス内にexecuteとisMultipleOfThreeとisMultipleOfFiveを実装する必要があります
abstract class BaseFizzBuzz {
  abstract public function execute(int $number);
  abstract protected function isMultipleOfThree(int $number): bool;
  abstract protected function isMultipleOfFive(int $number): bool;
}

class FizzBuzz extends BaseFizzBuzz {}