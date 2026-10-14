<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array  = explode(' ', $input);
$counts = array_count_values($array);

$maxCount = 0;
$maxValue = null;

foreach ($counts as $value => $count) {
    if ($count > $maxCount) {
        $maxCount = $count;
        $maxValue = $value;
    }
}

echo "Вывод: " . $maxValue . "\n";




