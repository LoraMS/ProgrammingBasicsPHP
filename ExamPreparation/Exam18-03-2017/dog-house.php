<?php

$length = readline();
$height = readline();

$roofArea = 2 * ($length * ($length / 2));

$rectanglesArea = 2 * ($length * ($length / 2));
$doorArea = ($length / 5) * ($length / 5);
$triangleArea = 2*(($length / 2) * ($height - $length / 2) / 2);
$squareArea = 2 * (($length / 2) * ($length / 2));

$wallArea = $rectanglesArea + ($triangleArea + ($squareArea - $doorArea));

$greenPaint = $wallArea / 3;
$redPaint = $roofArea / 5;

printf("%.2f\n", $greenPaint);
printf("%.2f", $redPaint);