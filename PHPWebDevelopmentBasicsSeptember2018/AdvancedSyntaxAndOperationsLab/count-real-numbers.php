<?php

$input = explode(' ', readline());
$counts = [];

for ($i = 0; $i < count($input); $i++) {
    if(!isset($counts[$input[$i]])){
        $counts[$input[$i]] = 1;
    } else {
        $counts[$input[$i]] ++;
    }
}

ksort($counts);

//$counts = array_count_values($input);
//ksort($counts);

foreach ($counts as $key=>$value) {
    echo "$key -> $value\n";
}