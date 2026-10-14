<?php


function combinations(array $elements, int $k, array $current = [])
{
    if (count($current) === $k) {
        echo implode(' ', $current) . "\n";
        return;
    }

    foreach ($elements as $el) {
        $current[] = $el;
        combinations($elements, $k, $current);
        array_pop($current);
    }
}

echo "Введите строку целых уникальных (не повторяющихся) чисел: ";
$input = trim(fgets(STDIN));
$elements = explode(' ', $input);

echo "Введите число элементов в комбинации (k): ";
$k = (int)trim(fgets(STDIN));

combinations($elements, $k);




