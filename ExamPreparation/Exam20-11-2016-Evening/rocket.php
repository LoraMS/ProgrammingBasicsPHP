<?php

$n = intval(readline());
$bottomStars = 2 * $n - 2;

for ($index = 0; $index < $n; $index++) {
    echo str_repeat(".", (((3 * $n - 2 ) / 2) - $index)) . "/" . str_repeat(" ", 2 * $index) . "\\" . str_repeat(".", (((3 * $n - 2 ) / 2) - $index)) . "\n";
}

echo str_repeat(".", $n / 2) . str_repeat("*", 2 * $n) . str_repeat(".", $n / 2) . "\n";

for ($index1 = 0; $index1 < 2*$n; $index1++) {
    echo str_repeat(".", $n / 2)."|".str_repeat("\\", 2 * $n - 2)."|".str_repeat(".", $n / 2) . "\n";
}

for ($index2 = 0; $index2 < $n/2; $index2++) {
    echo str_repeat(".", $n / 2 - $index2)."/".str_repeat("*", $bottomStars)."\\".str_repeat(".", $n / 2 - $index2) . "\n";
    $bottomStars += 2;
}
