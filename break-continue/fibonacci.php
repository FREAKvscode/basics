<?php

echo "Ввод: ";
$input = (int)trim(fgets(STDIN));

if ($input <= 0) {
    echo "Число должно быть положительным\n";
} elseif ($input === 1) {
    echo "Вывод: 0\n";
} else {
    $result = [0, 1];

    for ($i = 2; $i < $input; $i++) {
        $result[] = $result[$i - 1] + $result[$i - 2];
    }

    echo "Вывод: " . implode(' ', $result) . "\n";
}



