<?php
$input = 'Hello, there! ';
$n = 3;
$repeatString = function(&$repeatString, $input, $i = 0, $n, $output = ""){
    if($i < $n){
        return $repeatString($repeatString, $input, $i+1, $n, $output.=$input);
    }else{
        return $output;
    }
};
echo $repeatString($repeatString,$input,0,$n);