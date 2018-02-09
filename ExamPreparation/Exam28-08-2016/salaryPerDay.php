<?php

$workDays = readline();
$moneyPerDay = readline();
$dolarLev = readline();

$salaryPerMonth = $workDays * $moneyPerDay;
$bonus = $salaryPerMonth * 2.5;
$salaryPerYear = $salaryPerMonth * 12 + $bonus;

$taxes = $salaryPerYear * 0.25;
$salaryAfterTaxes = $salaryPerYear - $taxes;

$salaryLv = $salaryAfterTaxes * $dolarLev;
$salaryLvPerMonth = $salaryLv / 365;

printf("%.2f", $salaryLvPerMonth);


