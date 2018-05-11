<?php

$input = readline();
$arr = explode(" ", $input);

$len = count($arr);

while ($len>1) {
    for ($i = 0; $i < count($arr)-1; $i++) {
        $arr[$i] = $arr[$i] + $arr[$i+1];
    } 
    $len--;
}

echo $arr[0];
