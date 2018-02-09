<?php

$figure = readline();
$area = 0;

if ($figure === "square") {
    $site = floatval(readline());
    $area = $site * $site;
} else if ($figure === "rectangle") {
    $width = floatval(readline());
    $height = floatval(readline());
    $area = $width * $height;
} else if ($figure === "circle") {
    $radius = floatval(readline());
    $area = pi() * $radius * $radius;
} else if ($figure === "triangle") {
    $site = floatval(readline());
    $heightTriangle = floatval(readline());
    $area = ($site * $heightTriangle) / 2;
}

echo number_format($area, 3, ".", "");