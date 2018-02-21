<?php

$num = intval(readline());
$n = 1;

for ($index = 0; $index <= $num; $index+=2) {
    echo $n."\n";
    $n *= 4;
}

