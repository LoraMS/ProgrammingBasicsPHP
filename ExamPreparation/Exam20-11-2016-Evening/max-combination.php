<?php

$start = intval(readline());
$end = intval(readline());
$maxCombination = intval(readline());

$counter = 1;
for ($i = $start; $i <= $end; $i++) {
    for ($j = $start; $j <= $end; $j++) {
        if ($counter > $maxCombination) {
            break;
        }
        echo "<$i-$j>";
        $counter++;
    }
}

