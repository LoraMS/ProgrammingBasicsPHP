<?php

$x1 = readline();
$y1 = readline();
$x2 = readline();
$y2 = readline();
$x = readline();
$y = readline();

if ($x >= $x1 && $x <= $x2 && $y >= $y1 && $y <= $y2) {
    echo "Inside";
} else {
    echo "Outside";
}


