<?php

$counter = 0;
while(true){
    $input = readline();
    if(!is_numeric($input)){
        break;
    }
    $counter ++;
}
echo $counter;