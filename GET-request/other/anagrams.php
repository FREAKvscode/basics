<?php

echo "Введите первую строку: ";
$string1 = trim(fgets(STDIN));

echo "Введите вторую строку: ";
$string2 = trim(fgets(STDIN));

$chars1 = str_split($string1);
$chars2 = str_split($string2);

sort($chars1);
sort($chars2);

if (implode('', $chars1) === implode('', $chars2)) {
    echo "yes\n";
} else {
    echo "no\n";
}


