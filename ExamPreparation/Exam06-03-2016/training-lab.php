<?php

$width = readline();
$length = readline();

$widthCm = $width* 100;
$lengthCm = ($length * 100) - 100;
$row = floor($widthCm / 120);
$col = floor($lengthCm / 70);

$workSpaceCount = $row * $col - 3;

echo $workSpaceCount;
