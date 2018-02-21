<?php

$n = intval(readline());

echo str_repeat(".", $n + 1).str_repeat("_", (2*$n + 1)).str_repeat(".", $n + 1)."\n";
echo str_repeat(".", $n)."//".str_repeat("_", (2*$n - 1))."\\\\".str_repeat(".", $n)."\n";;

for ($index = 1; $index < $n; $index++) {
    echo str_repeat(".", $n - $index);
    echo "//";
    echo str_repeat("_", (4*$n + 3) - 4 - 2*($n - $index));
    echo "\\\\";
    echo str_repeat(".", $n - $index);
    echo "\n";
}

echo "//". str_repeat("_", ((4*$n - 6)/2));
echo "STOP!";
echo str_repeat("_", ((4*$n - 6)/2))."\\\\"."\n";

for ($index1 = $n; $index1 >= 1; $index1--) {
    echo str_repeat(".", $n - $index1);
    echo "\\\\";
    echo str_repeat("_", (4*$n + 3) - 4 - 2*($n - $index1));
    echo "//";
    echo str_repeat(".", $n - $index1);
    echo "\n";
}