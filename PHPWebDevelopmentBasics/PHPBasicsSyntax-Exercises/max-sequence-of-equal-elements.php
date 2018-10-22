<?php

//$input = "2 1 1 2 3 3 2 2 2 1";
$numbers = explode(" ", fgets(STDIN));
$start = 0;
$len = 1;
$bestStart = 0;
$bestLen = 1;

for ($i = 0; $i < count($numbers) - 1; $i++) {
    if ($numbers[$i] === $numbers[$i + 1]) {
        $len ++;
        $start = $i+1;
    } else {
        $start = 0;
        $len = 1;
    }

    if ($len > $bestLen) {
        $bestLen = $len;
        $bestStart = $start - $bestLen + 1;
    }
}

for ($j = $bestStart; $j < $bestLen + $bestStart; $j++) {
    echo $numbers[$j]." ";
}