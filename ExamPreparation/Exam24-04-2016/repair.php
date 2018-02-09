<?php

$n = readline();
$m = readline();
$l = readline();
$w = readline();
$o = readline();
$minutes = 0.2;

$area = $n * $n;
$tileArea = $l * $m;
$benchArea = $w * $o;

$restArea = $area - $benchArea;
$tiles = $restArea / $tileArea;
$time = $tiles * $minutes;

printf("%.2f\n", $tiles);
printf("%.2f", $time);


