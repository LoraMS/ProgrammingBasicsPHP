<?php
function findAverage($input){
    $sum = 0;
    for($i = 0; $i < strlen($input); $i++){
        $num = intval($input[$i]);
        $sum += $num;
    }

    $average =  $sum / strlen($input);
    return $average;
}

$input = trim(fgets(STDIN));
while (true){
    $average = findAverage($input);
    if($average > 5){
        break;
    }

    $input.= '9';
}

echo $input;