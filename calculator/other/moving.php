<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = explode(' ', $input);

$notZeros = [];
$zeroCount = 0;

foreach ($array as $value) {
    if ((int)$value === 0) {
        $zeroCount++;
    } else {
        $notZeros[] = $value;
    }
}

for ($i = 0; $i < $zeroCount; $i++) {
    $notZeros[] = 0;
}

echo "Вывод: " . implode(' ', $notZeros) . "\n";




