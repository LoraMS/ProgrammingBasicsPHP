<?php
//$numbers = [];
//while($number = intval(fgets(STDIN))){
//    $numbers[] = $number;
//}
//
//echo "Max: ".max($numbers);

$numbers = [];
while(true){
    $line = trim(fgets(STDIN));
    if(empty(($line))){
        break;
    }
    $number = intval($line);
    $numbers[] = $number;
}
echo "Max: " . max($numbers);