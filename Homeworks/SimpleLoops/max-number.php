<?php

$n = intval(readline());

$max = PHP_INT_MIN;
for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    if($num > $max){
    $max = $num;
    }
}

echo $max;
