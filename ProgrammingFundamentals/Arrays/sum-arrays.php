<?php

$inputFirst = readline();
$inputSecond = readline();

$arrFirst = explode(" ", $inputFirst);
$arrSecond = explode(" ", $inputSecond);

$maxLen = max(count($arrFirst), count($arrSecond));
$resultArr = [];

for ($i = 0; $i < $maxLen; $i++) {
    $resultArr[$i] = $arrFirst[$i%count($arrFirst)] + $arrSecond[$i%count($arrSecond)];
}

foreach ($resultArr as $value) {
    echo $value . " ";
}
