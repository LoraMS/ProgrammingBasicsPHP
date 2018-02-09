<?php

$bitcoinCount = readline();
$yuanCount = readline();
$comision = readline();

$bitcoinPerLv = 1168;
$yuanPerDolar = 0.15;
$dolarLv = 1.76;
$euroLv = 1.95;

$bitcoinToLev = $bitcoinCount * $bitcoinPerLv;
$yuanToDolar = $yuanCount * $yuanPerDolar;
$yuanToLev = $yuanToDolar * $dolarLv;
$amountLv = $bitcoinToLev + $yuanToLev;

$amountToEuro = $amountLv / $euroLv;

$amountAfterComision = $amountToEuro - $amountToEuro * ($comision/100);

printf("%.2f", $amountAfterComision);


