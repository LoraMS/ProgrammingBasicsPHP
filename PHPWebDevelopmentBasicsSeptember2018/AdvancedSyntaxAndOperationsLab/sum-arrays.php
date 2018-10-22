<?php

$first = readline();
$second = readline();

$arrFirst = array_map('intval', explode(' ', $first));
$arrSecond = array_map('intval', explode(' ', $second));

$lenFirst = count($arrFirst);
$lenSecond = count($arrSecond);
$maxLen = max($lenFirst, $lenSecond);

for ($i = 0; $i < $maxLen; $i++) {
    $firstValue = $arrFirst[$i % $lenFirst];
    $secondValue = $arrSecond[$i % $lenSecond];
    echo ($firstValue + $secondValue) .' ';
}