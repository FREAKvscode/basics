<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = explode(' ', $input);

usort($array, fn($a, $b) => ($b . $a) <=> ($a . $b));

$result = implode('', $array);

if (ltrim($result, '0') === '') {
    $result = '0';
}

echo "Вывод: " . $result . "\n";



