<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

$array = explode(" ", $input);
$result = [];

foreach ($array as $value) {
    if ((int)$value % 2 === 0) {
        $result[] = $value;
    }
}

echo "Вывод: " . implode(" ", $result) . "\n";


