<?php
if(isset($_GET['calculate'])){
    $operation = $_GET['operation'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = '';

    if($operation == 'sum'){
       $result = $num1 + $num2;
    } elseif ($operation == 'subtract'){
        $result =  $num1 - $num2;
    } else{
        $result = 'Invalid operation supplied';
    }
}

include "calculator-frontend.php";