<?php

$n = intval(readline());
$max = PHP_INT_MIN;
$keg = "";

for ($index = 0; $index < $n; $index++) {
    $model = readline();
    $radius = floatval(readline());
    $height = intval(readline());
    
    $volume = pi()*$radius*$radius*$height;
    echo $volume."\n";
    if ($volume > $max) {
        $volume = $max;
        $keg = $model;
    }
}

echo $keg;