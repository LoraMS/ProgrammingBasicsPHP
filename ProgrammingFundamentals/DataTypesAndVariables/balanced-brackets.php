<?php

$n = intval(readline());
$open = 0;
$close = 0;

for ($index = 0; $index < $n; $index++) {
    $str = readline();
    if($str === "("){
        $open ++;
    }
    if($str === ")"){
        $close ++;
    }
}

if ($open === $close) {
    echo "BALANCED";
} else{
    echo "UNBALANCED";
}