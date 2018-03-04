<?php

$weightCount = intval(readline());
$allWeightTonnage = 0;
$max3Tons = 0;
$between4And11Tons = 0;
$moreThan12Tons = 0;

for ($index = 0; $index < $weightCount; $index++) {
    $weightTonnage = intval(readline());
    $allWeightTonnage += $weightTonnage;
    if($weightTonnage <= 3){
        $max3Tons += $weightTonnage;
    } elseif($weightTonnage > 3 && $weightTonnage <= 11){
        $between4And11Tons += $weightTonnage;
    } elseif ($weightTonnage > 11) {
        $moreThan12Tons += $weightTonnage;
    }
}

$averageForTons = ($max3Tons * 200 + $between4And11Tons * 175 + $moreThan12Tons * 120) / $allWeightTonnage;
$max3TonsPercentage = ($max3Tons/$allWeightTonnage) * 100;
$between4And11TonsPercentage = ($between4And11Tons/$allWeightTonnage) * 100;
$moreThan12TonsPercentage = ($moreThan12Tons/$allWeightTonnage) * 100;

echo number_format($averageForTons, 2, ".", "")."\n";
echo number_format($max3TonsPercentage, 2, ".", "")."%\n";
echo number_format($between4And11TonsPercentage, 2, ".", "")."%\n";
echo number_format($moreThan12TonsPercentage, 2, ".", "")."%\n";