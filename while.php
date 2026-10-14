<?php

$array = [];

$i = 345;
while ($i <= 347) {
    if ($i % 2 == 0) {
        $array[] = $i;
    }
    $i++;
}

foreach ($array as $value) {
    echo $value . "\n";
}


