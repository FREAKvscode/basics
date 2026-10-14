<?php

$items = scandir(__DIR__);

foreach ($items as $item) {
    if ($item === '.' || $item === '..') {
        continue;
    }

    if (is_dir(__DIR__ . '/' . $item)) {
        echo $item . "<br>";
    }
}


