<?php

$capacity = intval(readline());
$fans = intval(readline());
$sectorA = 0;
$sectorB = 0;
$sectorV = 0;
$sectorG = 0;

for ($index = 0; $index < $fans; $index++) {
    $sector = readline();
    if($sector === "A"){
        $sectorA++;
    } elseif($sector === "B"){
        $sectorB++;
    } elseif($sector === "V"){
        $sectorV++;
    } elseif($sector === "G"){
        $sectorG++;
    }
}

$sectorAPercent = ($sectorA/$fans)*100;
$sectorBPercent = ($sectorB/$fans)*100;
$sectorVPercent = ($sectorV/$fans)*100;
$sectorGPercent = ($sectorG/$fans)*100;

$allFansPercent = $fans/$capacity * 100;

echo number_format($sectorAPercent, 2, ".", "")."%\n";
echo number_format($sectorBPercent, 2, ".", "")."%\n";
echo number_format($sectorVPercent, 2, ".", "")."%\n";
echo number_format($sectorGPercent, 2, ".", "")."%\n";
echo number_format($allFansPercent, 2, ".", "")."%\n";