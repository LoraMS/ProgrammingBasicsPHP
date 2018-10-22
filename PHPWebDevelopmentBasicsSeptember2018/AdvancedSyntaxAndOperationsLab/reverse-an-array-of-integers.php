<?php

$n = intval(readline());
$arr = [];

for ($i = 0; $i < $n; $i++) {
    $num = readline();
    $arr[] = $num;
}

for ($j = count($arr); $j >= 0; $j--) {
    echo $arr[$j].' ';
}

