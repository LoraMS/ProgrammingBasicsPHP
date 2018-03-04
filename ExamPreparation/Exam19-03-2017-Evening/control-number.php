<?php

$n = intval(readline());
$m = intval(readline());
$controlNumber = intval(readline());

$counter = 0;
$sum = 0;
$lastMove = 0;
$exit = false;

for ($i = 1; $i <= $n; $i++) {
    for ($j = $m; $j >= 1; $j--) {
        $counter++;
        $sum += 2*$i + 3*$j;
        if($sum >= $controlNumber){
            $lastMove = $counter;
            $exit = true;
            break;
        }
    }
    if ($exit) {
        break;
    }
}

if ($exit) {
    echo "$lastMove moves"."\n";
    echo "Score: $sum >= $controlNumber";
} else {
    echo "$counter moves";
}
