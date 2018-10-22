<?php

$first = intval(readline());
$second = intval(readline());
$start = 0;
$end = 0;

if($first < $second){
    $start = $first;
    $end = $second;
} else {
    $start = $second;
    $end = $first;
}

for ($i = $start; $i <= $end; $i++) {
    echo $i.PHP_EOL;
}
