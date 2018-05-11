<?php

$input = readline();
$pattern = '/\+359( |\-)2(\1)\d{3}(\1)\d{4}\b/';
preg_match_all($pattern, $input, $matches, PREG_PATTERN_ORDER);

echo implode(", ", $matches[0]);

//foreach($matches[0] as $value){
//    echo $value." ";
//}
//var_dump($matches);
