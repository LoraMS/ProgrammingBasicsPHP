<?php

$n = intval(readline());
$dashTop = $n - 1;
$tilda = 2;
$dashBottom = 0;

echo "|".str_repeat("-", 2*$n)."|\n";
echo "|".str_repeat("*", 2*$n)."|\n";
echo "|".str_repeat("-", 2*$n)."|\n";

for ($index = 0; $index < $n - 2; $index++) {
    echo "|".str_repeat("-", $dashTop). str_repeat("~", $tilda). str_repeat("-", $dashTop)."|\n";
    $dashTop --;
    $tilda += 2;
}

for ($index1 = 1; $index1 <= $n - 1; $index1++) {
    echo "|".str_repeat("-", $index1). str_repeat("~", $tilda). str_repeat("-", $index1)."|\n";
    $tilda -= 2;
}

for ($index2 = 1; $index2 <= $n + 2; $index2++) {
    if ($index2 === intval(floor(($n + 2) / 2))) {
        echo str_repeat("-", $index2 - 1)."\\". str_repeat(".", $n - 2)."MERRY".str_repeat(".", $n - 2)."\\\n"; 
    } elseif ($index2 === intval(floor(($n +2) / 2) + 2)) {
        echo str_repeat("-", $index2 - 1)."\\". str_repeat(".", $n - 2)."X-MAS".str_repeat(".", $n - 2)."\\\n"; 
    } else {
        echo str_repeat("-", $index2 - 1)."\\". str_repeat(".", 2*$n + 1)."\\\n"; 
    }
    $dashBottom = $index2;
}

echo str_repeat("-", $dashBottom)."\\".str_repeat("_", 2*$n + 1).")";

