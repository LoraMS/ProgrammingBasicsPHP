<?php

$n = intval(readline());
$dotsMiddle = 3 * $n;

echo str_repeat(".", $n) . str_repeat("*", 3 * $n) . str_repeat(".", $n) . "\n";

for ($index = 1; $index <= $n - 1; $index++) {
    echo str_repeat(".", $n - $index) . "*" . str_repeat(".", $dotsMiddle) . "*" . str_repeat(".", $n - $index) . "\n";
    $dotsMiddle += 2;
}

echo str_repeat("*", 5 * $n) . "\n";

$dotsMiddle -= 2;
for ($index1 = 1; $index1 <= 2 * $n + 1; $index1++) {
    if ($index1 === 2 * $n + 1) {
        echo str_repeat(".", $index1) . "*" . str_repeat("*", $dotsMiddle) . "*" . str_repeat(".", $index1) . "\n";
    } else {
        echo str_repeat(".", $index1) . "*" . str_repeat(".", $dotsMiddle) . "*" . str_repeat(".", $index1) . "\n";
    }
    $dotsMiddle -= 2;
}