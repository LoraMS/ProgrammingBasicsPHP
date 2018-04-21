<?php

$name = readline();
$volume = intval(readline());
$energyContent = intval(readline());
$sugarContent = intval(readline());

echo $volume."ml $name:\n";
echo ($energyContent*$volume) / 100 . "kcal, ". ($sugarContent * $volume) / 100 . "g sugars";
