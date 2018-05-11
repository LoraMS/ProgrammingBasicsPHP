<?php

$input = readline();
$arr = explode(" ", $input);

if (count($arr) == 1) {
    echo "{ $arr[0] }";
} else {
    $middle = count($arr)/2;
    $middleMinusOne = count($arr) / 2 - 1;
    $middlePlusOne = count($arr) / 2 + 1;
    if (count($arr) % 2 == 0) {
        echo "{ $arr[$middleMinusOne], $arr[$middle] }";
    } else {
        echo "{ $arr[$middleMinusOne], $arr[$middle], $arr[$middlePlusOne] }";
    }
}