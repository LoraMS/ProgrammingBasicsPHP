<?php

$m = readline();
$n = readline();
$p = readline();
$s = readline();

echo sprintf("%'.04d ", $m);
echo sprintf("%'.04d ", $n);
echo sprintf("%'.04d ", $p);
echo sprintf("%'.04d\n", $s);

//if (strlen($m) === 3) {
//    $m = "0"."$m";
//} elseif (strlen($m) === 2) {
//    $m = "00"."$m";
//} elseif (strlen($m) === 1) {
//    $m = "000"."$m";
//}
//if (strlen($n) === 3) {
//    $n = "0"."$n";
//} elseif (strlen($n) === 2) {
//    $n = "00"."$n";
//} elseif (strlen($n) === 1) {
//    $n = "000"."$n";
//}
//if (strlen($p) === 3) {
//    $p = "0"."$p";
//} elseif (strlen($p) === 2) {
//    $p = "00"."$p";
//} elseif (strlen($p) === 1) {
//    $p = "000"."$p";
//}
//if (strlen($s) === 3) {
//    $s = "0"."$s";
//} elseif (strlen($s) === 2) {
//    $s = "00"."$s";
//} elseif (strlen($s) === 1) {
//    $s = "000"."$s";
//}
//
//echo "$m $n $p $s";