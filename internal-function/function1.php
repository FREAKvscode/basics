<?php

function sorted(array $array): string
{
    sort($array);
    return implode(":", $array);
}

echo sorted([1, 3, 2]);


