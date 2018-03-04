<?php

$n = intval(readline());
$at = 2*$n + 4;

for ($index = 0; $index < $n; $index++) {
    echo str_repeat(" ", $n)."~ ~ ~\n";
}

echo str_repeat("=", 3*$n + 5)."\n";

for ($index1 = 1; $index1 <= $n - 2; $index1++) {
    if ($index1 === intval(floor($n/2))) {
        echo "|". str_repeat("~", $n)."JAVA". str_repeat("~", $n)."|".str_repeat(" ", $n - 1)."|\n";
    } else {
        echo "|". str_repeat("~", 2*$n + 4)."|". str_repeat(" ", $n - 1)."|\n";
    }
}

echo str_repeat("=", 3*$n + 5)."\n";

for ($index2 = 0; $index2 < $n; $index2++) {
    echo str_repeat(" ", $index2)."\\". str_repeat("@", $at)."/". str_repeat(" ", $index2)."\n";
    $at -= 2;
}

echo str_repeat("=", 2*$n + 6);