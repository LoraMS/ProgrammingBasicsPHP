<?php

$doughBeginning = readline();
$breadProductGr = readline();
$breadProductPrice = readline();
$soldBreadProducts = readline();
$soldSweets = readline();

$pricePerKgDough = 4;
$sweetsPrice = $breadProductPrice + $breadProductPrice * 0.25;
$sweetsGr = $breadProductGr - $breadProductGr * 0.2;

$breadIncomes = $soldBreadProducts * $breadProductPrice;
$doughUsedForBread = $soldBreadProducts * $breadProductGr;
$doughUsedForSweets = $soldSweets * $sweetsGr;
$sweetsIncomes = $soldSweets * $sweetsPrice;

$costs = ($doughBeginning/1000 + $doughUsedForBread/1000) * $pricePerKgDough;

$incomes = ($breadIncomes + $sweetsIncomes)- $costs;
$usedDaudh = $doughUsedForBread + $doughUsedForSweets;

$incomes = round($incomes, 2);

printf("Pure income: %.2f lv.\n", $incomes);
printf("Dough used: %.0f g.", $usedDaudh);


