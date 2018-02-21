<?php

$n = intval(readline());
$lastIndex = 0;
$dashesEnd = 0;

for ($index = 0; $index < $n; $index++) {
    echo str_repeat("-", 3*$n)."*".str_repeat("-", $index)."*".str_repeat("-", 5*$n-(3*$n + 2 + $index))."\n";
    $lastIndex = $index;
    $dashesEnd = $index;
}

for ($index1 = 0; $index1 < floor($n/2); $index1++) {
    echo str_repeat("*", 3*$n + 1).str_repeat("-", $lastIndex)."*".str_repeat("-", $lastIndex)."\n";
}

for ($index2 = 1; $index2 <= floor($n/2); $index2++) {
    if($index2 == floor($n/2)){
        echo str_repeat("-", 3*$n - $index2 + 1)."*".str_repeat("*", $lastIndex)."*".str_repeat("-", $dashesEnd)."\n";
    } else {
        echo str_repeat("-", 3*$n - $index2 + 1)."*".str_repeat("-", $lastIndex)."*".str_repeat("-", $dashesEnd)."\n";
    }
    $lastIndex += 2;
    $dashesEnd -= 1;
}