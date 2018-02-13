<?php

$n = intval(readline());
$stars = 1;
if ($n % 2 === 0) {
    $stars = 2;
}

for ($row = 1; $row <= floor(($n + 1) / 2); $row++) {
    echo str_repeat("-", (($n-$stars)/2));
    echo str_repeat("*", $stars);
    echo str_repeat("-", (($n-$stars)/2));
    echo "\n";
    $stars += 2;
}

for ($index = 1; $index <= floor($n / 2); $index++) {
    echo "|";
    echo str_repeat("*", ($n - 2));
    echo "|"."\n";
}
