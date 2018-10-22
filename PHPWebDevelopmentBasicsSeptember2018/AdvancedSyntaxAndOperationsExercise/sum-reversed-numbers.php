<?php

$arr = explode(' ', readline());
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $current = intval(strrev($arr[$i]));
    $sum += $current;
}

echo $sum;