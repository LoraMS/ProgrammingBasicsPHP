<?php

$text = trim(fgets(STDIN));

$len = strlen($text);

if($len > 20){
    $result = substr($text, 0, 20);
    echo $result;
} else{
    $rest = 20 - $len;
    echo $text;
    echo str_repeat("*", $rest);
}
