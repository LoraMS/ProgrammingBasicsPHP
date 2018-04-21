<?php

$n = intval(readline());
$sum = 0;

for ($index = 0; $index < $n; $index++) {
    $input = readline();
    $sum += ord($input);
}

echo "The sum equals: $sum";

