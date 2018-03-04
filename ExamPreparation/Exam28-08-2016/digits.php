<?php

$n = intval(readline());
$num1 = floor($n/100)%10;
$num2 = floor($n/10)%10;
$num3 = $n%10;
$rows = $num1 + $num2;
$cols = $num1 + $num3;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if($n%5 == 0){
            $n -= $num1;
        } elseif ($n%3 == 0) {
            $n -= $num2;
        } else {
            $n += $num3;
        }
        echo "$n ";
    }
    echo "\n";
}


