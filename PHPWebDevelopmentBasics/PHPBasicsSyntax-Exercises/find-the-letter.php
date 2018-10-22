<?php

$text = trim(fgets(STDIN));
$searched = explode(" ", trim(fgets(STDIN)));
$letter = $searched[0];
$index = intval($searched[1]);
$count = 0;
$position = 0;

for($i = 0; $i < strlen($text); $i++){
    if($text[$i] === $letter){
        $count ++;
        $position = $i;
    }
    if($count === $index){
        break;
    }
}

if ($count === $index) {
    echo $position;
} else {
    echo "Find the letter yourself!";
}