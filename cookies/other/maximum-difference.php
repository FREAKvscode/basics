<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = array_map('intval', explode(' ', $input));

$maxDiff = 0;
$n = count($array);

for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        $diff = $array[$i] - $array[$j];

        if ($diff > $maxDiff) {
            $maxDiff = $diff;
        }
    }
}

echo "Вывод: " . $maxDiff . "\n";




