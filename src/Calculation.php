<?php

function add($num1, $num2) {
  return $num1 + $num2;
}

function subtraction($num1, $num2) {
  return $num1 - $num2;
}

function multiplication($num1, $num2) {
  return $num1 * $num2;
}

function division($num1, $num2) {
  // 分母の方が0の時
  if ($num2 === 0) {
    // throwで例外を投げられる
    // DivisionByZeroErrorクラスを"zero division"というエラーメッセージで投げる
    throw new DivisionByZeroError("zero division");
  }
  // 分母が0じゃない時は普通に割り算する
  return $num1 / $num2;
}