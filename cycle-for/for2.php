<?php

$input = trim(fgets(STDIN));

$words = explode(' ', $input);
$words = array_reverse($words);

echo implode(' ', $words) . "\n";



