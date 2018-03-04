<?php

$days = intval(readline());
$liters = 0.00;
$quantityGradus = 0.00;

for ($index = 0; $index < $days; $index++) {
    $rakia = floatval(readline());
    $gradus = floatval(readline());
    $liters += $rakia;
    $quantityGradus += $rakia * $gradus;
}

$degree = $quantityGradus / $liters;

echo "Liter: ".number_format($liters, 2, ".", "")."\n";
echo "Degrees: ". number_format($degree, 2, ".", "")."\n";

if ($degree < 38.00) {
    echo "Not good, you should baking!";
} elseif ($degree >= 38 && $degree < 42) {
    echo "Super!";
} elseif ($degree >= 42) {
    echo "Dilution with distilled water!";
}
