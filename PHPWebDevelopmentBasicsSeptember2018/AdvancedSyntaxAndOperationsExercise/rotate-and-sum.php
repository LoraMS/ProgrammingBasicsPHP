<?php

$arr = explode(' ', readline());
$rotation = intval(readline());
$result = array_fill(0, count($arr), 0);

while ($rotation !== 0) {
    $num = array_pop($arr);
    array_unshift($arr,$num);
    for($i=0; $i<count($arr); $i++){
        $result[$i]+=$arr[$i];
    }
    $rotation--;
}

echo implode(' ', $result);