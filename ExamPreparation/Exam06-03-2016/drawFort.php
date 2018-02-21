<?php

$n = intval(readline());

echo "/" . str_repeat("^", floor($n / 2)) . "\\" . str_repeat("_", 2 * $n - (4 + 2 * floor($n / 2))) . "/" . str_repeat("^", floor($n / 2)) . "\\" . "\n";

for ($index = 1; $index < $n - 2; $index++) {
    echo "|";
    echo str_repeat(" ", 2 * $n - 2);
    echo "|\n";
}
echo "|".str_repeat(" ", floor(($n + 2)/2)).str_repeat("_", 2 * $n - (4 + 2 * floor(($n / 2)))).str_repeat(" ", ($n + 2)/2)."|\n";
echo "\\" . str_repeat("_", floor($n / 2)) . "/" . str_repeat(" ", 2 * $n - (4 + 2 * floor($n / 2))) . "\\" . str_repeat("_", floor($n / 2)) . "/";

