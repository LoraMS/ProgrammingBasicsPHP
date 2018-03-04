<?php

$n = intval(readline());
$blankSpace = 0;

echo str_repeat(" ", $n - 1)."@   @\n";
echo str_repeat(" ", $n)."\_/\n";
echo str_repeat(" ", $n)."/ \\\n";
echo str_repeat(" ", $n)."|_|\n";

for ($index = 0; $index < $n; $index++) {
    echo str_repeat(" ", $n - $index)."/".str_repeat(" ", $index)."|".str_repeat(" ", $index)."\\\n";
}

for ($index1 = 0; $index1 < floor($n/2); $index1++) {
    echo " |".str_repeat(" ", floor(($n - 2)/2))."@".str_repeat(" ", ceil(($n - 2)/2))."|".str_repeat(" ", ceil(($n - 2)/2))."@".str_repeat(" ", floor(($n - 2)/2))."|\n";
}

for ($index2 = 1; $index2 <= floor($n/2); $index2++) {
    echo str_repeat(" ", $index2)."\\". str_repeat(" ", $n - $index2)."|". str_repeat(" ", $n - $index2)."/\n";
    $blankSpace = $n - $index2;
}

$blankSpace += 1;

echo str_repeat(" ", $blankSpace). str_repeat("^", floor($n/2))."|". str_repeat("^", floor($n/2));