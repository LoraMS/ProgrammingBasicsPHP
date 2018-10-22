<?php

$arr = explode(' ', readline());
$counter = 1;
$maxCounter = 1;
$bestLen = 0;

for ($i = 0; $i < count($arr)-1; $i++) {
    if($arr[$i] < $arr[$i + 1]){
        $counter ++;
        if($counter > $maxCounter){
            $maxCounter = $counter;
            $bestStart = $i;
            $bestLen = $i + 1;
        }
    } else {
        $counter = 1;
    }
}

for ($j = $bestLen - $maxCounter + 1; $j <= $bestLen; $j++) {
    echo $arr[$j].' ';
}


