<?php

$m = intval(readline());
$n = intval(readline());
$magicNumber = intval(readline());
$exit = false;
$counter = 0;

for ($i = $n; $i >= $m; $i--) {
    for ($j = $n; $j >= $m; $j--) {
        $counter ++;
        if($i + $j === $magicNumber){
            echo "Number found! $i + $j = $magicNumber";
            $exit = true;
            break 2;
        }
    }
}

if (!$exit) {
    echo "$counter combinations - neither equals $magicNumber";
}
