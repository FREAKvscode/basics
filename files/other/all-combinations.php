<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = explode(' ', $input);
$n = count($array);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i === $j) {
            continue;
        }
        echo $array[$i] . ' ' . $array[$j] . "\n";
    }
}



