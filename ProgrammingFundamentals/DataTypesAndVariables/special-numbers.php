<?php

$n = intval(readline());

for ($index = 1; $index <= $n; $index++) {
    $sum = 0;
    $digits = $index;
    while ($digits > 0) {
        $sum += $digits % 10;
        $digits = $digits/10;
    }
    
    $special = $sum === 5 || $sum === 7 || $sum === 11;
    
    echo "$index -> ";
    echo $special ? "True" : "False";
    echo "\n";
}
