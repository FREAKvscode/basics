<?php

if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (!isset($_GET['operation']) || $_GET['operation'] === '') {
    return 'Не передана операция';
}

if (!isset($_GET['x1']) || !isset($_GET['x2']) || $_GET['x1'] === '' || $_GET['x2'] === '') {
    return 'Не переданы аргументы';
}

if (!is_numeric($_GET['x1']) || !is_numeric($_GET['x2'])) {
    return 'Аргументы должны быть числами';
}

$x1 = (float)$_GET['x1'];
$x2 = (float)$_GET['x2'];
$operation = $_GET['operation'];

$allowed = ['+', '-', '*', '/'];
if (!in_array($operation, $allowed, true)) {
    return 'Операция не поддерживается';
}

$expression = $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

switch ($operation) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($x2 === 0.0) {
            return 'На 0 делить нельзя!';
        }
        $result = $x1 / $x2;
        break;
}

return $expression . $result;



