<?php

$n = intval(readline());
$dots = 2;

echo str_repeat("*", 2*$n + 1)."\n";
echo ".*".str_repeat(" ", 2*$n - 3)."*.\n";

for ($index = 0; $index < $n - 2; $index++) {
    echo str_repeat(".", $dots + $index)."*".str_repeat("@", (2*$n - 1)-2*($dots+$index))."*".str_repeat(".", $dots + $index)."\n";
}

echo str_repeat(".", $n)."*".str_repeat(".", $n)."\n";

for ($index1 = 0; $index1 < $n - 2; $index1++) {
    echo str_repeat(".", $n - 1 - $index1)."*".str_repeat(" ", $index1)."@".str_repeat(" ", $index1)."*".str_repeat(".", $n - 1 -$index1)."\n";
}

echo ".*".str_repeat("@", 2*$n - 3)."*.\n";
echo str_repeat("*", 2*$n + 1)."\n";