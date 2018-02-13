<?php

$width = intval(readline());
$length = intval(readline());

$cakePieces = $width * $length;
$exit = false;

while (true) {
    $piece = readline();

    if ($piece === "STOP") {
        break;
    }
    
    $cakePieces -= $piece;

    if ($cakePieces < 0) {
        $exit = true;
        break;
    }
}

if ($exit == true) {
    echo "No more cake left! You need ". abs($sum - $cakePieces)." pieces more.";
} else {
    echo ($cakePieces - $sum )." pieces are left.";
}
