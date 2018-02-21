<?php 

$goOn = true;
do{
    echo "Enter even number: ";
    $num = readline();
    
    if (!is_numeric($num)) {
        echo "Invalid number!\n";
        $goOn = true;
    } elseif ($num - floor($num) != 0) {
        echo "Invalid number!\n";
        $goOn = true;
    } elseif ($num % 2 !== 0) {
       echo "The number is not even.\n";
       $goOn = true;
    } else {
        $goOn = false;
    }
    
} while ($goOn === true);

echo "Even number entered: $num";

