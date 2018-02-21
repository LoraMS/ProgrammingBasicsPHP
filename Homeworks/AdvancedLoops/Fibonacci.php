<?php

$num = intval(readline());

$f0 = 1;
$f1 = 1;

for ($index = 0; $index < $num - 1; $index++) {
    $fNext = $f0 + $f1;
    $f0 = $f1;
    $f1 = $fNext;
}

echo $f1;