# このリポジトリについて

phpunitを使ってテストについて概要を知るためのものです

# 事前準備

このプロジェクトルートディレクトリにて
```
composer install
```
とターミナルに打ってください

# このリポジトリに使い方

branchごとに学習する内容が異なります

### practice-1

まずsrc/Calculation.phpをみて、どういう処理があるのか確認してください

次にtest/CalculationTest.phpをみてください
ファイル内にコメントで補足しているのでそれを参考にtestってこんな感じなのかと理解してください

ターミナルにて
```
vendor/bin/phpunit test
```
と打ち込んでください。
テストが走るはずです
`OK (4 tests, 4 assertions)` と出ればokです

最後に練習としてTODOを置いてあります
チャレンジしてみてください

答えはpractice-2ブランチにあります


