<?php

$n = intval(readline());
$sharp = 1;
$dotsTop = (12*$n - 6) / 2;
$dotsBottom = 3;

for ($index = 0; $index < 2*$n; $index++) {
    echo str_repeat(".", $dotsTop).str_repeat("#", $sharp).str_repeat(".", $dotsTop)."\n";
    $sharp += 6;
    $dotsTop -= 3;
}

$sharp -= 12;
for ($index1 = 0; $index1 < $n - 2; $index1++) {
    echo "|".str_repeat(".", $dotsBottom - 1).str_repeat("#", $sharp).str_repeat(".", $dotsBottom)."\n";
    $dotsBottom += 3;
    $sharp -= 6;
}

for ($index2 = 1; $index2 <= $n; $index2++) {
    if($index2 === $n){
        echo "@".str_repeat(".", $dotsBottom - 1).str_repeat("#", $sharp).str_repeat(".", $dotsBottom)."\n";
    } else {
        echo "|".str_repeat(".", $dotsBottom - 1).str_repeat("#", $sharp).str_repeat(".", $dotsBottom)."\n";
    } 
}