<?php

$vegetablesPrice = readline();
$fruitsPrice = readline();
$vegetablesKg = readline();
$fruitsKg = readline();
$euroLv = 1.94;

$vegetables = $vegetablesKg * $vegetablesPrice;
$fruits = $fruitsKg * $fruitsPrice;

$all = $vegetables + $fruits;

$result = $all / $euroLv;

echo $result;

