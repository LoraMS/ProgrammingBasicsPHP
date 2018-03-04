<?php

$n = intval(readline());

for ($index = 0; $index < $n - 1; $index++) {
    echo str_repeat(".", $index)."*".str_repeat(".", $n - $index)."*".str_repeat(".", $n - $index)."*".str_repeat(".", $index)."\n";
}

echo str_repeat(".", $n - 1). str_repeat("*", (2*$n + 3) - 2*($n - 1)).str_repeat(".", $n - 1)."\n";
echo str_repeat("*", 2*$n + 3)."\n";
echo str_repeat(".", $n - 1). str_repeat("*", (2*$n + 3) - 2*($n - 1)).str_repeat(".", $n - 1)."\n";

for ($index1 = 1; $index1 <= $n - 1; $index1++) {
    echo str_repeat(".", $n - 1 - $index1)."*".str_repeat(".", 1+$index1)."*".str_repeat(".", 1+$index1)."*".str_repeat(".", $n - 1 - $index1)."\n";
}