<?php

$str = explode(' ', readline());
for ($i = count($str)-1; $i >= 0; $i--) {
    echo $str[$i].' ';
}
$strReversed = array_reverse($str);
echo implode(' ', $strReversed);
