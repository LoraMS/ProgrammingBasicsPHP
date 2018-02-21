<?php

$n = intval(readline());
$signMiddleTop = 2*$n - 1;
$signMiddleBottom = 2*$n - 1;
$signMiddle = $n;

for ($index = 1; $index <= $n; $index++) {
    echo str_repeat("*", $index)."\\".str_repeat("-", $signMiddleTop)."/".str_repeat("*", $index)."\n";
    $signMiddleTop -= 2;
}

for ($index1 = 0; $index1 < floor($n / 3); $index1++) {
    echo "|".str_repeat("*", floor($n/2 + $index1))."\\".str_repeat("*", $signMiddle)."/".str_repeat("*", floor($n/2 + $index1))."|\n";
    $signMiddle -= 2;
}

for ($index2 = 1; $index2 <= $n; $index2++) {
    echo str_repeat("-", $index2)."\\".str_repeat("*", $signMiddleBottom)."/".str_repeat("-", $index2)."\n";
    $signMiddleBottom -= 2;
}
