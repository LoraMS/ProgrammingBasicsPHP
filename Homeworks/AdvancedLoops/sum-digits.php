<?php

$num = intval(readline());
$sum = 0;

//while ($num > 0) {
//    $sum += $num % 10;
//    $num = $num / 10;
//}

do{
    $sum += $num % 10;
    $num = $num / 10;
} while ($num > 0);

echo $sum;
