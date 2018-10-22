<?php

$months = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$n = intval(readline());
if($n <= 0 || $n > 12){
    echo 'Error';
    return;
}

echo $months[$n]; 
