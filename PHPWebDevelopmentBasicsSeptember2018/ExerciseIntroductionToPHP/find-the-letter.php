<?php

$str = readline();
$input = readline();
$arr = explode(' ', $input);
$letter = $arr[0];
$position = $arr[1];
$count = 0;
$found = false;

for ($index = 0; $index < strlen($str); $index++) {
    if($str[$index] === $letter){
        $count++;
        if($count === intval($position)){
            echo $index;
            $found = true;
            exit();
        }
    }
}

if(!$found){
    echo 'Find the letter yourself!';
}