<?php

$n = intval(readline());
$sum = 0;

for ($index = 0; $index < $n; $index++) {
    $num = floatval(readline());
    $sum += $num;
}
echo $sum;
