<?php

$n = intval(readline());
$dotsUp = ($n - 1) / 2;
$dotsDown = ($n - 1) / 2; 
        
echo str_repeat(".", (3*$n - 1)/2)."x".str_repeat(".", (3*$n - 1)/2)."\n";
echo str_repeat(".", (3*$n - 3)/2)."/x\\".str_repeat(".", (3*$n - 3)/2)."\n";
echo str_repeat(".", (3*$n - 3)/2)."x|x".str_repeat(".", (3*$n - 3)/2)."\n";

for ($index = 0; $index < floor($n/2); $index++) {
    echo str_repeat(".", $dotsUp).str_repeat("x", $n + $index)."|". str_repeat("x", $n + $index).str_repeat(".", $dotsUp)."\n";
    $dotsUp --;
}

echo str_repeat("x", (3*$n - 1)/2)."|".str_repeat("x", (3*$n - 1)/2)."\n";

for ($index1 = 1; $index1 <= $n/2; $index1++) {
    echo str_repeat(".", $index1).str_repeat("x", (3*$n - 2*$index1 - 1)/2)."|". str_repeat("x", (3*$n - 2*$index1 - 1)/2).str_repeat(".", $index1)."\n";
}

echo str_repeat(".", (3*$n - 3)/2)."/x\\".str_repeat(".", (3*$n - 3)/2)."\n";
echo str_repeat(".", (3*$n - 3)/2)."\\x/".str_repeat(".", (3*$n - 3)/2)."\n";

for ($index2 = 0; $index2 < floor($n/2); $index2++) {
    echo str_repeat(".", $dotsDown).str_repeat("x", $n + $index2)."|". str_repeat("x", $n + $index2).str_repeat(".", $dotsDown)."\n";
    $dotsDown --;
}

echo str_repeat("x", (3*$n - 1)/2)."|".str_repeat("x", (3*$n - 1)/2)."\n";

for ($index3 = 1; $index3 <= $n/2; $index3++) {
    echo str_repeat(".", $index3).str_repeat("x", (3*$n - 2*$index3 - 1)/2)."|". str_repeat("x", (3*$n - 2*$index3 - 1)/2).str_repeat(".", $index3)."\n";
}

echo str_repeat(".", (3*$n - 3)/2)."x|x".str_repeat(".", (3*$n - 3)/2)."\n";
echo str_repeat(".", (3*$n - 3)/2)."\\x/".str_repeat(".", (3*$n - 3)/2)."\n";
echo str_repeat(".", (3*$n - 1)/2)."x".str_repeat(".", (3*$n - 1)/2)."\n";