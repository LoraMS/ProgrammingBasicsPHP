<?php

$n = intval(readline());

echo str_repeat(" ", $n + 1) . "|" . "\n";
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(" ", $n - $i);
    echo str_repeat("*", $i);
    echo " | ";
    echo str_repeat("*", $i);
    echo "\n";
}