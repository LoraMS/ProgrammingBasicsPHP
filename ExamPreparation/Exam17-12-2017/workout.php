<?php

$days = intval(readline());
$kmFirstDay = floatval(readline());
$allKm = $kmFirstDay;
$sum = $kmFirstDay;

for ($index = 0; $index < $days; $index++) {
    $percent = intval(readline());
    $allKm += $allKm * ($percent/100);
    $sum += $allKm;
}

$difference = abs($sum - 1000);
$differenceFormatted = ceil($difference);
if($sum >= 1000){
    echo "You've done a great job running $differenceFormatted more kilometers!";
} else {
    echo "Sorry Mrs. Ivanova, you need to run $differenceFormatted more kilometers";
}