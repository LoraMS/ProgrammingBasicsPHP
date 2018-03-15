<?php

$n = intval(readline());

echo str_repeat("#", $n - 1) . "/^\\" . str_repeat("#", $n - 1) . "\n";
for ($index = 0; $index < floor($n / 2); $index++) {
    echo str_repeat("#", $n - 2 - $index) . "." . str_repeat(" ", 3 + 2 * $index) . "." . str_repeat("#", $n - 2 - $index) . "\n";
}

echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "S" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "O" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "F" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "T" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";

if ($n === 4) {
    echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", $n + 1) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
} else {
    for ($index1 = 0; $index1 < floor($n - 4); $index1++) {
        if ($n % 2 === 0) {
            echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", $n + 1) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
        } else {
            echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", $n) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
        }
    }
}

echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "U" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "N" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
echo str_repeat("#", ceil($n / 2 - 1)) . "|" . str_repeat(" ", ceil(($n - 1) / 2)) . "I" . str_repeat(" ", ceil(($n - 1) / 2)) . "|" . str_repeat("#", ceil($n / 2 - 1)) . "\n";
echo "@" . str_repeat("=", 2 * $n - 1) . "@\n";

$sharp = floor(($n - 1) / 2) + 2;
for ($index2 = 0; $index2 < ceil(($n-1)/ 2); $index2++) {
    echo str_repeat("#", $sharp) . "|" . str_repeat(" ", 2 * $n + 1 - 2 - 2 * $sharp) . "|" . str_repeat("#", $sharp) . "\n";
}

echo str_repeat("#", $sharp) . "\\" . str_repeat(".", 2 * $n + 1 - 2 - 2 * $sharp) . "/" . str_repeat("#", $sharp) . "\n";
