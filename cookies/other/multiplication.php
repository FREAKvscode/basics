<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = array_map('intval', explode(' ', $input));
$result = [];

$n = count($array);

foreach ($array as $index => $value) {
    $product = 1;

    foreach ($array as $j => $other) {
        if ($j !== $index) {
            $product *= $other;
        }
    }

    $result[] = $product;
}

echo "Вывод: " . implode(' ', $result) . "\n";




