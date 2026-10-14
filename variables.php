<?php

echo "Обмен через третью переменную: \n";
$a = 3;
$b = 5;

$c = $a;
$a = $b;
$b = $c;

echo "a = $a\n";
echo "b = $b\n";


echo "\nОбмен без третьей переменной: \n";
$a = 3;
$b = 5;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a\n";
echo "b = $b\n";



