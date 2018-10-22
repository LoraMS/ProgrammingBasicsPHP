<?php
$operation = $argv[1];

$firstNum = intval(fgets(STDIN));
$secondNum = intval(fgets(STDIN));

if($operation == "sum"){
    echo " == " . ($firstNum + $secondNum);
} elseif ($operation == "subtract") {
    echo " == " . ($firstNum - $secondNum);
} else {
    echo " == Wrong operation supplied";
}