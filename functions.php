<?php


function minimum_value(float $a, float $b, float $c): float
{
    return min($a, $b, $c);
}


function multiplicationBy2(int &$a, int &$b): void
{
    $a = $a * 2;
    $b = $b * 2;
}


function factorial(int $x): int
{
    if ($x === 0) {
        return 1;
    }
    return $x * factorial($x - 1);
}


function numbers(int $x): void
{
    if ($x === 0) {
        echo $x;
        return;
    }
    numbers($x - 1);
    echo ", " . $x;
}



