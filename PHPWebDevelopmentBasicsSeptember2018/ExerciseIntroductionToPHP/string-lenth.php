<?php

$input = readline();
$len = strlen($input);
if($len >= 20){
    echo substr($input, 0, 19);
} else {
    echo $input.str_repeat('*', 20-$len);
}

