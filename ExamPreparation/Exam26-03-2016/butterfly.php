<?php

$n = intval(readline());
$sign = "";

for ($i = 1; $i <= $n - 2; $i++) {
    if($i % 2 === 0){
        $sign = "-";
    } else {
        $sign = "*";
    }
    echo str_repeat($sign, $n - 2)."\\ /".str_repeat($sign, $n - 2)."\n";
}

echo str_repeat(" ", ((2*$n-1)/2))."@".str_repeat(" ", ((2*$n-1)/2))."\n";

for ($index = 1; $index <= $n - 2; $index++) {
    if($index % 2 === 0){
        $sign = "-";
    } else {
        $sign = "*";
    }
    echo str_repeat($sign, $n - 2)."/ \\".str_repeat($sign, $n - 2)."\n";
}