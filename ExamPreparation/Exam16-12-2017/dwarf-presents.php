<?php

$dwarfCount = intval(readline());
$amount = intval(readline());
$sum = 0.00;

for ($index = 0; $index < $dwarfCount; $index++) {
    $present = strtolower(readline());
    if ($present === "sand clock") {
        $sum += 2.20;
    } elseif ($present === "magnet") {
        $sum += 1.50;
    } elseif ($present === "cup") {
        $sum += 5.00;
    } elseif ($present === "t-shirt") {
        $sum += 10.00;
    }
}

$difference = abs($amount - $sum);
$differenceFormatted = number_format($difference, 2, ".", "");
if ($amount >= $sum) {
    echo "Santa Claus has $differenceFormatted more leva left!";
} else {
    echo "Santa Claus will need $differenceFormatted more leva.";
}