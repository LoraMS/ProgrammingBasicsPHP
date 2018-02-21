<?php

$n = intval(readline());

echo str_repeat(".", 2*$n - 1)."/|\\".str_repeat(".",  2*$n - 1)."\n";
echo str_repeat(".", 2*$n - 1)."\\|/".str_repeat(".",  2*$n - 1)."\n";
echo str_repeat(".", 2*$n - 1)."***".str_repeat(".",  2*$n - 1)."\n";

for ($index = 1; $index <= 2*$n - 1; $index++) {
    echo str_repeat(".", 2*$n-1-$index)."*";
    echo str_repeat("-", $index)."*";
    echo str_repeat("-", $index)."*";
    echo str_repeat(".", 2*$n-1-$index)."\n";
}

echo str_repeat("*", 4*$n + 1)."\n";
echo str_repeat("*.", 2*$n)."*"."\n";
echo str_repeat("*", 4*$n + 1);