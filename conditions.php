<?php


if ('string') {
    echo 'Условие выполнилось';
}


if (0) {
    echo 'Условие выполнилось';
}


if (null) {
    echo 'Условие выполнилось';
}


if (5) {
    echo 'Условие выполнилось';
}


$digit = 10;
$isEven = $digit % 2 === 0 ? "Четное" : "Нечетное";

echo $isEven;




