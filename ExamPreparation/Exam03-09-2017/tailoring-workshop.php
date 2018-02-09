<?php

$count = readline();
$width = readline();
$height = readline();

$pArea = ($width+2*0.30)*($height+2*0.30);
$pAll = $pArea * $count;

$kArea = ($width/2)*($width/2);
$kAll = $kArea * $count;

$usdAmount = 7*$pAll + 9*$kAll;
$bgnAmount = $usdAmount * 1.85;

printf("%.2f USD", $usdAmount);
echo "\n";
printf("%.2f BGN", $bgnAmount);

