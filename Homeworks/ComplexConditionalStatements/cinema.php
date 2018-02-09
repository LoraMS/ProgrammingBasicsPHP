<?php

$type = strtolower(readline());
$r = intval(readline());
$c = intval(readline());

$places = $r * $c;
$result = -1.0;

if ($type === "premiere") {
    $result = $places * 12.00;
} elseif ($type === "normal") {
    $result = $places * 7.50;
} elseif ($type === "discount") {
    $result = $places * 5.00;
}

if ($result > 0) {
    printf("%.2f leva", $result);
}