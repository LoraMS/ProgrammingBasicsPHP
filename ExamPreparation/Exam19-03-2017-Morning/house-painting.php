<?php

$x = readline();
$y = readline();
$h = readline();

$roofTriangleArea = $x * $h / 2;
$roofRectangleArea = $x * $y;
$roofArea = 2 * ($roofRectangleArea + $roofTriangleArea);

$redPaintQuantity = $roofArea / 4.3;

$squareArea = $x * $x * 2;
$rectangleArea = $x * $y * 2;

$doorArea = 1.2 * 2;
$windowsArea = 1.5 * 1.5 * 2;

$squareWall = $squareArea - $doorArea;
$rectangleWall = $rectangleArea - $windowsArea;

$greenPaintQuantity = ($squareWall + $rectangleWall) / 3.4;

printf("%.2f\n", $greenPaintQuantity);
printf("%.2f", $redPaintQuantity);
