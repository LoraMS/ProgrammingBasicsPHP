<?php

$n = intval(readline());
$arr = [];

for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    $arr[$i] = $num;
}

// print_r($arr);
/*
Array
(
    [0] => 5
    [1] => 9
    [2] => 1
)
 */

for ($j = count($arr)-1; $j >= 0; $j--) {
    echo $arr[$j]." ";
}