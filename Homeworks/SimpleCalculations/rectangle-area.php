<?php

$x1 = readline();
$y1 = readline();
$x2 = readline();
$y2 = readline();

$width = abs($x1 - $x2);
$height = abs($y1 - $y2);
$area = $width * $height;
$perimeter = 2 * ($width + $height);

printf("Area = %.2f\n", $area);
printf("Perimeter = %.2f", $perimeter);