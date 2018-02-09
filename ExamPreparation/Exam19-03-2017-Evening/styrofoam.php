<?php

$budget = readline();
$houseArea = readline();
$windowCount = readline();
$styrofoamInPackageMeter = readline();
$pricePerPackageStyrofoam = readline();

$windowAreaAll = 2.4 * $windowCount;
$workArea = $houseArea - $windowAreaAll;
$packagesNeeded = ceil(($workArea + $workArea * 0.1) / $styrofoamInPackageMeter);
$costs = $packagesNeeded * $pricePerPackageStyrofoam;
$difference = abs($budget - $costs);

if ($budget >= $costs) {
    printf("Spent: %.2f \n", $costs);
    printf("Left: %.2f", $difference);
} else {
    printf("Need more: %.2f", $difference);
}

