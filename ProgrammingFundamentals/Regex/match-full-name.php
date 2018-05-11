<?php

$input = readline();
$pattern = '/\b([A-Z]{1}[a-z]+ [A-Z]{1}[a-z]+)\b/';
preg_match_all($pattern, $input, $matches);

foreach($matches[0] as $value){
    echo $value." ";
}

