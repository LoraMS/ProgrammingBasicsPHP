<?php

$h = intval(readline());
$x = intval(readline());
$y = intval(readline());

$insideHorizontalRectangle = ($x > 0 && $x < 3 * $h) && ($y > 0 && $y < $h);
$insideVerticalRectangle = ($x > $h && $x < 2 * $h) && ($y > $h && $y < 4 * $h);
$onMiddleSide = ($x > $h && $x < 2 * $h && $y == $h);

$outsideHorizontalRectangle = ($x < 0 || $x > 3 * $h) || ($y < 0 || $y > $h);
$outsideVerticalRectangle = ($x < $h || $x > 2 * $h) || ($y < $h || $y > 4 * $h);

if($insideHorizontalRectangle || $insideVerticalRectangle || $onMiddleSide){
    echo "inside";
} elseif($outsideHorizontalRectangle && $outsideVerticalRectangle){
    echo "outside";
}else {
    echo "border";
}