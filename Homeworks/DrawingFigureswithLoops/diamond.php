<?php 

$n = intval(readline());

$stars = null;
$dashMiddle = null;
if ($n % 2 === 0) {
    $stars = 2;
    $dashMiddle = 2;
} else {
    $stars = 1;
    $dashMiddle = 1;
}

$topBottom = str_repeat("-", floor(($n - $stars) / 2)) . str_repeat("*", $stars) . str_repeat("-", floor(($n - $stars) / 2)) . "\n";

echo $topBottom;

for ($i = 0; $i < floor(($n - 3) / 2); $i++) {
    echo str_repeat("-", floor(($n - 3) / 2) - $i) . "*" . str_repeat("-", $dashMiddle) . "*" . str_repeat("-", floor(($n - 3) / 2) - $i);
    echo "\n";
    $dashMiddle += 2;
}

$dashMiddle -= 2;
if ($n > 2) {
    echo "*" . str_repeat("-", floor($n - 2)) . "*\n";
}

for ($index = 1; $index <= floor(($n - 3) / 2); $index++) {
    echo str_repeat("-", $index) . "*" . str_repeat("-", $dashMiddle) . "*" . str_repeat("-", $index) . "\n";
    $dashMiddle -= 2;
}

if ($n > 2) {
    echo $topBottom;
}


