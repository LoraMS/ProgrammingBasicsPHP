<?php

$amount = floatval(readline());
$monthsCount = intval(readline());

$simpleRateAmount = $amount;
$complexRateAmount = $amount;

for ($i = 0; $i < $monthsCount; $i++) {
    $simpleRateAmount += $amount * 0.03; 
    $complexRateAmount += $complexRateAmount * 0.027;
}

$simple = number_format($simpleRateAmount, 2, ".", "");
$complex = number_format($complexRateAmount, 2, ".", "");
echo "Simple interest rate: $simple lv.\n";
echo "Complex interest rate: $complex lv.\n";

$difference = abs($simpleRateAmount - $complexRateAmount);
$diffFormatted = number_format($difference, 2, ".", "");

if($simpleRateAmount > $complexRateAmount){
    echo "Choose a simple interest rate. You will win $diffFormatted lv.";
} else{
    echo "Choose a complex interest rate. You will win $diffFormatted lv.";
}