<?php
$input = trim(fgets(STDIN));
$points = explode(", ", $input);

$x1 = intval($points[0]);
$y1 = intval($points[1]);
$x2 = intval($points[2]);
$y2 = intval($points[3]);
$x3 = intval($points[4]);
$y3 = intval($points[5]);

$distance12 = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
$distance23 = sqrt(pow(($x3 - $x2), 2) + pow(($y3 - $y2), 2));
$distance13 = sqrt(pow(($x3 - $x1), 2) + pow(($y3 - $y1), 2));

if (($distance12 <= $distance13) && ($distance13 >= $distance23)) {
    $dist = $distance12 + $distance23;
    echo "1->2->3: $dist";
} else if (($distance12 <= $distance23) && ($distance13 < $distance23)) {
    $dist = $distance13 + $distance12;
    echo "2->1->3: $dist";
} else {
    $dist = $distance23 + $distance13;
    echo "1->3->2: $dist";
}