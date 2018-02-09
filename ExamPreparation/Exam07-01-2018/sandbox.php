<?php

$width = readline();
$length = readline();
$sandPricePerKg = readline();
$boardPricePerCopy = readline();

$sandBoxArea = $width * $length;

$sandArea = ($width - 0.4) * ($length - 0.4);
$sandQuantity = ceil($sandArea * 20);

$sand = $sandQuantity * $sandPricePerKg;

$boardArea = $sandBoxArea - $sandArea;
$oneBoardArea = 2.2 * 0.2;
$boardQuantity = ceil($boardArea / $oneBoardArea);

$boards = $boardQuantity * $boardPricePerCopy;

$all = $sand + $boards;
printf("%.2f", $all);
