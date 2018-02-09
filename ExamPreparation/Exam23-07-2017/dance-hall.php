<?php

$length = readline();
$width = readline();
$site = readline();

$dancer = 40;
$dancerSpace = 7000;

$hallArea = ($length * 100) * ($width * 100);

$wardrobeArea = ($site * 100) * ($site * 100);

$benchArea = $hallArea / 10;

$hallAreaFreeSpace = $hallArea - $wardrobeArea - $benchArea;

echo floor($hallAreaFreeSpace / ($dancer + $dancerSpace));


