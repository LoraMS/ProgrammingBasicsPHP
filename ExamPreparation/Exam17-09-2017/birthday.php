<?php

$length = readline();
$width = readline();
$height = readline();
$percent = readline();

$volumeCm = $length*$width*$height;
$volumeDm = $volumeCm * 0.001;

$liters = $volumeDm - $volumeDm*($percent*0.01);

printf("%.3f", $liters);
