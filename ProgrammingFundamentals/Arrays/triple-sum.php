<?php

$input = readline();
$arr = explode(" ", $input);
$isTriplet = false;

for ($i = 0; $i < count($arr); $i++) {
    $a = $arr[$i];
    for ($j = $i + 1; $j < count($arr); $j++) {
        $b = $arr[$j];
        $sum = $a + $b;
        if(in_array($sum, $arr)){
            echo "$a + $b == $sum\n";
            $isTriplet = true;
        }
    }
}

if (!$isTriplet) {
    echo "No";
}
