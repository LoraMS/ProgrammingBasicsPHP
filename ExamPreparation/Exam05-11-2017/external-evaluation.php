<?php

$n = intval(readline());
$markPoor = 0;
$markSatisfactory = 0;
$markGood = 0;
$markVeryGood = 0;
$markExcellent = 0;
for ($index = 0; $index < $n; $index++) {
    $score = floatval(readline());
    if ($score > 0 && $score <= 22.5) {
        $markPoor++;
    } elseif ($score > 22.5 && $score <= 40.5) {
        $markSatisfactory++;
    } elseif ($score > 40.5 && $score <= 58.5) {
        $markGood++;
    } elseif ($score > 58.5 && $score <= 76.5) {
        $markVeryGood++;
    } elseif ($score > 76.5 && $score <= 100.0) {
        $markExcellent++;
    } 
}

$markPoorPercent = $markPoor/$n * 100;
$markSatisfactoryPercent = $markSatisfactory/$n * 100;
$markGoodPercent = $markGood/$n * 100;
$markVeryGoodPercent = $markVeryGood/$n * 100;
$markExcellentPercent = $markExcellent/$n * 100;

echo number_format($markPoorPercent, 2, ".", "") ."% poor marks\n";
echo number_format($markSatisfactoryPercent, 2, ".", "") ."% satisfactory marks\n";
echo number_format($markGoodPercent, 2, ".", "") ."% good marks\n";
echo number_format($markVeryGoodPercent, 2, ".", "") ."% very good marks\n";
echo number_format($markExcellentPercent, 2, ".", "") ."% excellent marks\n";
