<?php

$n = intval(readline());
$dash = (5*$n - ($n + 4))/2;
$and = $n + 2;
$dashBottom = 0;

echo str_repeat("-", 2*$n). str_repeat("*", $n). str_repeat("-", 2*$n)."\n";

for ($index = 1; $index <= $n/2; $index++) {
    echo str_repeat("-", $dash).str_repeat("*", $index).str_repeat("&", $and).str_repeat("*", $index).str_repeat("-", $dash)."\n"; 
    $and += 2;
    $dash -= 2;
}

$dash += 1;
$tilda = 5*$n - 2*$dash - 4;

for ($index1 = 0; $index1 < $n / 2; $index1++) {
    echo str_repeat("-", $dash).str_repeat("*", 2).str_repeat("~", $tilda).str_repeat("*", 2).str_repeat("-", $dash)."\n"; 
    $tilda += 2;
    $dash -= 1;
}

echo str_repeat("-", $n/2)."*".str_repeat("|", 4*$n -2)."*".str_repeat("-", $n/2)."\n";

$tilda -= 2;

for ($index2 = 0; $index2 < $n/2; $index2++) {
    echo str_repeat("-", $n/2 + $index2) . str_repeat("*", 2).str_repeat("~", $tilda) . str_repeat("*", 2) . str_repeat("-", $n/2 + $index2)."\n";
    $tilda -= 2;
    $dashBottom = $n/2 + $index2;
}

$and -= 2;
$dashBottom += 1;

for ($index3 = 0; $index3 < $n/2; $index3++) {
    echo str_repeat("-", $dashBottom).str_repeat("*", $n/2-$index3).str_repeat("&", $and).str_repeat("*", $n/2 - $index3).str_repeat("-", $dashBottom)."\n"; 
    $and -= 2;
    $dashBottom += 2;
}

echo str_repeat("-", 2*$n). str_repeat("*", $n). str_repeat("-", 2*$n)."\n";