<?php

$groups = intval(readline());

$all = 0;
$max5 = 0;
$between6And12 = 0;
$between13And25 = 0;
$between26And40 = 0;
$moreThan41 = 0;

for ($index = 0; $index < $groups; $index++) {
    $people = intval(readline());
    $all += $people;
    if ($people<= 5) {
        $max5 += $people;
    } elseif ($people > 5 && $people <= 12) {
        $between6And12 += $people;
    } elseif ($people > 12 && $people <= 25) {
        $between13And25 += $people;
    } elseif ($people > 25 && $people <= 40) {
        $between26And40 += $people;
    } elseif ($people > 40) {
        $moreThan41 += $people;
    }
}

$max5Percentage = ($max5/$all) * 100;
$between6And12Percentage = ($between6And12/$all) * 100;
$between13And25Percentage = ($between13And25/$all) * 100;
$between26And40Percentage = ($between26And40/$all) * 100;
$moreThan41Percentage = ($moreThan41/$all) * 100;

echo number_format($max5Percentage, 2, ".", "")."%\n";
echo number_format($between6And12Percentage, 2, ".", "")."%\n";
echo number_format($between13And25Percentage, 2, ".", "")."%\n";
echo number_format($between26And40Percentage, 2, ".", "")."%\n";
echo number_format($moreThan41Percentage, 2, ".", "")."%\n";