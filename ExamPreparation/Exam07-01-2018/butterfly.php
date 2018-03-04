<?php

$n = intval(readline());
$blankSpace = 4*$n-8;
$wingsBottom = $n - 2;

for ($index = 1; $index <= $n - 2; $index++) {
    echo str_repeat("*\\", $index).str_repeat(" ", $blankSpace).str_repeat("/*", $index)."\n";
    $blankSpace -= 4;
}

echo str_repeat("\\/", 2*$n - 2)."\n";

for ($index1 = 0; $index1 < floor($n / 2); $index1++) {
    echo str_repeat("<", (4*$n - 10)/2)."*|**|*".str_repeat(">", (4*$n - 10)/2)."\n";
}

echo str_repeat("/\\", 2*$n - 2)."\n";

$blankSpace += 4;
for ($index2 = 0; $index2 < $n - 2; $index2++) {
    echo str_repeat("*/", $wingsBottom).str_repeat(" ", $blankSpace).str_repeat("\\*", $wingsBottom)."\n";
    $blankSpace += 4;
    $wingsBottom -= 1;
}