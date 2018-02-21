<?php

$n = intval(readline());

echo "+".str_repeat("~", $n -2)."+".str_repeat(".", 2*$n + 1)."\n";

for ($index = 0; $index < 2*$n + 1; $index++) {
    echo "|".str_repeat(".", $index)."\\".str_repeat("~", $n - 2)."\\".str_repeat(".", 2*$n -$index)."\n";
}

for ($index1 = 0; $index1 < 2*$n + 1; $index1++) {
    echo str_repeat(".", $index1)."\\".str_repeat(".", 2*$n - $index1)."|".str_repeat("~", $n - 2)."|"."\n";
}

echo str_repeat(".", 2*$n + 1)."+".str_repeat("~", $n - 2)."+"."\n";

