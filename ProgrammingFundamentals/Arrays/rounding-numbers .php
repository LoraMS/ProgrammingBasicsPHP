<?php

$input = readline();
$arr = explode(" ", $input);

for ($i = 0; $i < count($arr); $i++) {
    $rounded = round($arr[$i]);
    echo $arr[$i] . " => " . $rounded."\n";
}


