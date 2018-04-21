<?php

$n = intval(readline());
$counter = 0;
$sum = 0;

for ($index = 0; $index < 100; $index++) {
    if($index % 2 !== 0){
        echo "$index\n";
        $counter ++;
        $sum += $index;
        
        if ($counter === $n) {
            break;
        }
    }
}
echo "Sum: $sum";
