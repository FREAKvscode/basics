<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

if ($input === '') {
    echo "Вывод: Некорректный ввод\n";
} else {
    $array = explode(' ', $input);
    $unique_elements = array_unique($array);

    sort($unique_elements);

    echo "Вывод: " . implode(' ', $unique_elements) . "\n";
}




