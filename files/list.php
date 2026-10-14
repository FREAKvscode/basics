<?php

$files = scandir(__DIR__);

foreach ($files as $file) {
    echo $file . "<br>";
}


