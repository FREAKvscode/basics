<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = array_map('intval', explode(' ', $input));
$n = count($array);

$maxSum = $array[0];

for ($i = 0; $i < $n; $i++) {
    $sum = 0;

    for ($j = $i; $j < $n; $j++) {
        $sum += $array[$j];

        if ($sum > $maxSum) {
            $maxSum = $sum;
        }
    }
}

echo "Вывод: " . $maxSum . "\n";




