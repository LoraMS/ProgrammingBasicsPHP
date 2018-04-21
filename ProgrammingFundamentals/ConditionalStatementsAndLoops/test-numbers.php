<?php

$n = intval(readline());
$m = intval(readline());
$boundary = intval(readline());
$sum = 0;
$counter = 0;
$exit = false;

for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $m; $j++) {
        $sum += 3*($i * $j);
        $counter ++;
        if($sum >= $boundary){
            echo "$counter combinations\n";
            echo "Sum: $sum >= $boundary";
            $exit = true;
            break 2;
        }
    }
}

if (!$exit) {
    echo "$counter combinations\n";
    echo "Sum: $sum";
}

