<?php

$n = intval(readline());
$middleTop = 1;
$middle = 0;
$middleBottom = 0;

for ($index = 1; $index <= 2 * $n; $index++) {
    echo str_repeat(".", ((12 * $n - 5 - $middleTop) / 2)) . str_repeat("#", $middleTop) . str_repeat(".", ((12 * $n - 5 - $middleTop) / 2)) . "\n";
    $middleTop += 6;
    $middle = $middleTop;
}

$middle -= 12;

for ($index1 = 1; $index1 <= $n - 2; $index1++) {
    echo "|" . str_repeat(".", ((12 * $n - 5 - $middle) / 2) - 1) . str_repeat("#", $middle) . str_repeat(".", ((12 * $n - 5 - $middle) / 2)) . "\n";
    $middle -= 6;
    $middleBottom = $middle;
}

for ($index2 = 1; $index2 <= $n; $index2++) {
    if($index2 === $n){
        echo "@" . str_repeat(".", ((12 * $n - 5 - $middleBottom) / 2) - 1) . str_repeat("#", $middleBottom) . str_repeat(".", ((12 * $n - 5 - $middleBottom) / 2))."\n";
    } else{
        echo "|" . str_repeat(".", ((12 * $n - 5 - $middleBottom) / 2) - 1) . str_repeat("#", $middleBottom) . str_repeat(".", ((12 * $n - 5 - $middleBottom) / 2))."\n";
    } 
}