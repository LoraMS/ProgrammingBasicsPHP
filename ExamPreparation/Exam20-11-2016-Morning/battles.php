<?php

$firstPlayer = intval(readline());
$secondPlayer = intval(readline());
$maxBattles = intval(readline());

$counter = 1;
for ($i = 1; $i <= $firstPlayer; $i++) {
    for ($j = 1; $j <= $secondPlayer; $j++) {
        if ($counter > $maxBattles) {
            break;
        }
        echo "($i <-> $j) ";
        $counter++;
    }
}
