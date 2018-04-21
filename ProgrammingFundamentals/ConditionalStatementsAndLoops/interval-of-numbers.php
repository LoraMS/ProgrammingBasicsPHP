<?php

$m = intval(readline());
$n = intval(readline());
$start = 0;
$end = 0;

if($m < $n){
    $start = $m;
    $end = $n;
} else{
    $start = $n;
    $end = $m;
}

for ($index = $start; $index <= $end; $index++) {
    echo $index."\n";
}
