<?php

$num = intval(readline());
$sum = 0;
$counter = 0;

for ($i = 1; $i <= 100; $i += 2) {
    if($counter === $num){
        break;
    }
    $counter ++;
    $sum += $i;
    echo $i.PHP_EOL;
}
echo "Sum: $sum";
