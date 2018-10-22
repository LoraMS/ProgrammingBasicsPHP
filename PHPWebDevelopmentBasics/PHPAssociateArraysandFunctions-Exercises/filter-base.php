<?php
$age = [];
$salary = [];
$position = [];
while (true) {
    $input = trim(fgets(STDIN));
    if ($input == 'filter base') {
        break;
    }
    $data = explode(" -> ", $input);
    $name = $data[0];
    $value = $data[1];
    if(!is_numeric($value)){
        $position[$name] = $value;
    } elseif (is_int($value)){
        $age[$name] = $value;
    } else{
        $salary[$name] = $value;
    }
}

$command = trim(fgets(STDIN));
if($command == "Position"){
    printBase($position, $command);
} elseif ($command == "Age"){
    printBase($age, $command);
} elseif ($command == "Salary"){
    printBase($salary, $command);
}

function printBase($arr, $command){
    foreach($arr as $key=>$value){
        echo "Name: $key\n";
        echo "$command: $value\n";
        echo str_repeat("=", 20)."\n";
    }
}