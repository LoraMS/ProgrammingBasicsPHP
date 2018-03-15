<?php

$n = readline();
$n1 = intval(readline());
$m = readline();
$m1 = intval(readline());
$k = readline();
$k1 = intval(readline());

$first = ord($n) + $n1;
$second = ord($m) + $m1;
$third = ord($k) + $k1;


$toascii = chr($first). chr($second). chr($third);

if($toascii === "777"){
    echo $toascii."\n";
    echo "*** JACKPOT ***";
} elseif ($toascii === "@@@") {
    echo $toascii."\n";
    echo "!!! YOU LOSE EVERYTHING !!!";
} else {
    echo $toascii;
}
