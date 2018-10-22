<?php
$number = intval(trim(fgets(STDIN)));
$commands = explode(", ", trim(fgets(STDIN)));
foreach ($commands as $command){
    if($command == 'chop'){
        $number /= 2;
    } elseif($command == 'dice'){
        $number = sqrt($number);
    } elseif($command == 'spice'){
        $number += 1;
    } elseif($command == 'bake'){
        $number *= 3;
    } elseif($command == 'fillet'){
        $number -= $number*0.2;
    }
    echo $number."\n";
}
