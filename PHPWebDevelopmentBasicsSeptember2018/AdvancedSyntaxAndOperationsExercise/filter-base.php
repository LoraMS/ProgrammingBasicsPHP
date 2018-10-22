<?php

$base = [];
while (true) {
    $input = explode(' -> ', readline());
    if($input[0] === 'filter base'){
        break;
    }
    
    $criteria = $input[1];
    if(filter_var($criteria, FILTER_VALIDATE_INT)){
        $employee = ['Name'=>$input[0], 'Age' => intval($input[1])];
        $base[] = $employee;
    } elseif (filter_var($criteria, FILTER_VALIDATE_FLOAT)) {
        $employee = ['Name'=>$input[0], 'Salary' => number_format(floatval($input[1]),2,'.','')];
        $base[] = $employee;
    } else {
        $employee = ['Name'=>$input[0], 'Position' => $input[1]];
        $base[] = $employee;
    }
}

$filterCriteria = readline();

foreach ($base as $employee ){
    if(array_key_exists($filterCriteria,$employee)){
        echo "Name: ".$employee['Name'].PHP_EOL.$filterCriteria.": ".$employee[$filterCriteria].PHP_EOL;
        echo str_repeat('=',20).PHP_EOL;
    }
}

/*
$base = [];
$input = explode(' -> ',readline());
while ($input[0]!== 'filter base'){
    if(preg_match('/^[0-9]+$/',$input[1])){
        $employee = ['Name'=>$input[0], 'Age' => intval($input[1])];
        array_push($base,$employee);
    } else if(preg_match('/^[0-9.]+$/',$input[1])){
        $employee = ['Name'=>$input[0], 'Salary' => number_format(floatval($input[1]),2,'.','')];
        array_push($base,$employee);
    } else {
        $employee = ['Name'=>$input[0], 'Position' => $input[1]];
        array_push($base,$employee);
    }
    $input = explode(' -> ',readline());
}
$filter = readline();
foreach ($base as $emp) {
    //print_r($emp);
    if(array_key_exists($filter,$emp)){
        echo "Name: ".$emp['Name'].PHP_EOL.$filter.": ".$emp[$filter].PHP_EOL;
        echo str_repeat('=',20).PHP_EOL;
    }
}
 */