<?php

function sliced(array $array): array
{
    return array_slice($array, 1, 3);
}

var_dump(sliced([1, 2, 3, 4, 5]));



