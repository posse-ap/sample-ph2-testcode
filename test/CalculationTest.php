<?php

// ここでsrc配下のCalculation.phpにある関数をこのファイル内で使えるようにする
require_once 'src/Calculation.php';

use PHPUnit\Framework\TestCase;

// class名はテストしたいファイル名 + Testとする
// @example Calculation.phpの場合 Calculation + Test
// これに沿わないとテストを実行した時にwarningが出る
class CalculationTest extends TestCase
{
  // メソッド名はtestから始める
  // test~~の~~でテストする内容を示す
  // この場合add(足し算)についてのテストだとわかる
  public function testAdd()
  {
    // 作ったadd関数の結果を$resultに入れる
    $result = add(1, 2);

    // assert文を使って、上の結果と、期待する値を比較する
    // 第一引数に期待する結果、第二引数に実際の結果を入れる
    $this->assertEquals(3, $result);

    // assert文にはたくさん種類があるので、
    // 適宜必要なassert文を探して使うようにする
    // @see https://phpunit.readthedocs.io/ja/latest/assertions.html
  }

  public function testSubtraction()
  {
    $result = subtraction(5, 1);
    $this->assertEquals(4, $result);
  }

  public function testMultiplication()
  {
    $result = multiplication(5, 2);
    $this->assertEquals(10, $result);
  }

  // 一つの関数がif文などで条件によって返す値が変わる場合、
  // その取りうる場合全てをテストすることが望ましい
  // @example
  // 掛け算だと0がある場合、結果が0になるのでその場合も確認している
  public function testMultiplicationWith0()
  {
    $result = multiplication(5, 0);
    $this->assertEquals(0, $result);
  }

  // TODO
  // 1: Calculation.phpに割り算の関数を用意する
  // 2: 作った関数に対してテストを書く
  // テストは以下の3ケースとする
  // 正常系 @example 4 ÷ 2 = 2 -> 関数が返す値と期待する結果が一致することを確認するテストを書く
  // 異常系 @example 4 ÷ 0　　　-> 例外を発生させて、例外が発生することを確認するテストを書く。例外クラスはDivisionByZeroErrorとする

  // Sample Answer
  public function testDivision()
  {
    $result = division(4, 2);
    $this->assertEquals(2, $result);
  }

  // 0割の場合だとわかるtest名にする
  public function testZeroDivision()
  {
    // DivisionByZeroErrorクラスが投げられることを確認する
    $this->expectException(DivisionByZeroError::class);
    // 例外のエラーメッセージが一致することを確認する
    $this->expectExceptionMessage("zero division");

    // NOTE: 上のexpect文より先にdivisionを呼び出すとテスト失敗する
    division(4, 0);
  }
}