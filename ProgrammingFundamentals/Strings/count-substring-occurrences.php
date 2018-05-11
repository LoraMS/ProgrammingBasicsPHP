<?php

$text = strtolower(readline());
$word = strtolower(readline());

function substr_count_overlap($string, $needle) {
    $count = 0;
    $start = 0;
    while(1) {
        $found = strpos($string, $needle, $start);
        if($found !== FALSE) {
            $count++;
            $start = $found + 1;
        } else {
            return $count;
        }
    }
    return $count;
}

echo substr_count_overlap($text, $word);