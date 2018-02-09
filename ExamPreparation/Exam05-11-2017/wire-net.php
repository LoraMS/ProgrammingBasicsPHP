<?php

$yardLength = readline();
$yardWidth = readline();
$netHeight = readline();
$netPricePerMeter = readline();
$netWeightPerQuadratMeter = readline();

$yardPerimeter = ($yardLength + $yardWidth) *2;
echo $yardPerimeter."\n";

$yardPrice = $netPricePerMeter * $yardPerimeter;
printf("%.2f\n", $yardPrice);

$netArea = $netHeight * $yardPerimeter;
$netWeight = $netWeightPerQuadratMeter * $netArea;
printf("%.3f\n", $netWeight);