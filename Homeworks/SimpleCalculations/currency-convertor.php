<?php

$amount = readline();
$inCurrency = readline();
$outCurrency = readline();

if ($inCurrency === "USD") {
    $bgnCurrency = $amount * 1.79549;
} elseif ($inCurrency === "EUR") {
    $bgnCurrency = $amount * 1.95583;
} elseif ($inCurrency === "GBP") {
    $bgnCurrency = $amount * 2.53405;
} else {
    $bgnCurrency = $amount;
}

if ($outCurrency === "USD") {
    $result = $bgnCurrency / 1.79549;
} elseif ($outCurrency === "EUR") {
    $result = $bgnCurrency / 1.95583;
} elseif ($outCurrency === "GBP") {
    $result = $bgnCurrency / 2.53405;
} else {
    $result = $bgnCurrency;
}

echo round($result, 2)." ".$outCurrency;