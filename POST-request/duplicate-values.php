<?php

echo "Ввод: ";
$input = trim(fgets(STDIN));

if ($input === "") {
    echo "Вывод: Некорректный ввод\n";
} else {
    $array  = explode(" ", $input);
    $counts = array_count_values($array);

    $duplicates = [];
    foreach ($counts as $value => $count) {
        if ($count >= 2) {
            $duplicates[] = $value;
        }
    }

    echo "Вывод: " . implode(' ', $duplicates) . "\n";
}



