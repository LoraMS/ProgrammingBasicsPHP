<?php

$n = intval(readline());
$middleUp = 3 * $n;
$dotsMiddle = 0;
$dotsAside = 0;

for ($index = 0; $index < $n / 2; $index++) {
    echo str_repeat(".", $n + $index) . str_repeat("#", $middleUp) . str_repeat(".", $n + $index) . "\n";
    $middleUp -= 2;
    $dotsMiddle = $n + $index;
}
$middleUp -= 2;

for ($index1 = 1; $index1 <= $n / 2 + 1; $index1++) {
    echo str_repeat(".", $dotsMiddle + $index1) . "#" . str_repeat(".", $middleUp) . "#" . str_repeat(".", $dotsMiddle + $index1) . "\n";
    $middleUp -= 2;
    $dotsAside = $index1;
}
$middleUp += 2;

echo str_repeat(".", $dotsMiddle + $dotsAside) . "#" . str_repeat("#", $middleUp) . "#" . str_repeat(".", $dotsMiddle + $dotsAside)."\n";

for ($index2 = 1; $index2 <= $n + 2; $index2++) {
    if($index2 === ($n + 2)/2){
        echo str_repeat(".", (5*$n - 10)/ 2) . "D^A^N^C^E^" . str_repeat(".", (5*$n - 10)/ 2)."\n";
    } else{
       echo str_repeat(".", (5*$n - ($n + 4)) / 2) . str_repeat("#", $n + 4) . str_repeat(".", (5*$n - ($n + 4))/ 2)."\n"; 
    }
}