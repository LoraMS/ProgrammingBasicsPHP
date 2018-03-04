<?php

$n = intval(readline());
$hashtagUpper = 2*$n - 1;
$blankSpaceUpper = 1;
$hashtagDown = 2*$n - 1;

echo str_repeat("#", 4*$n + 1)."\n";

for ($index = 1; $index <= $n; $index++) {
    if ($index == (floor($n/2) + 1)) {
        echo str_repeat(".", $index).str_repeat("#", $hashtagUpper).str_repeat(" ", ($blankSpaceUpper-3)/2)."(@)".str_repeat(" ", ($blankSpaceUpper-3)/2).str_repeat("#", $hashtagUpper).str_repeat(".", $index)."\n";
    } else {
        echo str_repeat(".", $index).str_repeat("#", $hashtagUpper).str_repeat(" ", $blankSpaceUpper).str_repeat("#", $hashtagUpper).str_repeat(".", $index)."\n";
    }
    
    $hashtagUpper -= 2;
    $blankSpaceUpper += 2;
}

for ($index1 = 1; $index1 <= $n; $index1++) {
    echo str_repeat(".", $index1 + $n).str_repeat("#", $hashtagDown).str_repeat(".", $index1 + $n)."\n";
    $hashtagDown -= 2;
}
