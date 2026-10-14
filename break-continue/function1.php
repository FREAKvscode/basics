<?php

function isFind(array $array, int $key): bool
{
    foreach ($array as $value) {
        if ($value === $key) {
            return true;
        }
    }
    return false;
}


