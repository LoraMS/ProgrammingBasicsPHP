<?php

$input = readline();
$arr = explode(" ", $input);
$n = intval(readline());

$result = $arr;
for ($i = 0; $i < $n; $i++) {
    $inputCommand = readline();
    $command = explode(" ", $inputCommand);
    
    if($command[0] == 'Reverse'){
        $result = array_reverse($result);
    } elseif($command[0] == 'Distinct'){
        $result = array_unique($result);
    } elseif($command[0] == 'Replace'){
        $result[$command[1]] = $command[2];
    }
}

foreach ($result as $value) {
    echo $value . ", ";
}