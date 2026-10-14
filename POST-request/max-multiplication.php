<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = array_map('intval', explode(' ', $input));
sort($array);

$n = count($array);
echo "Вывод: " . ($array[$n - 1] * $array[$n - 2]) . "\n";



