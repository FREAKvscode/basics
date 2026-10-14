<?php

function occurrences (array $array, int $key): int
{
    $counter = 0;
    foreach ($array as $value) {
        if ($value !== $key) {
            continue;
        }
        $counter++;
    }
    return $counter;
}


