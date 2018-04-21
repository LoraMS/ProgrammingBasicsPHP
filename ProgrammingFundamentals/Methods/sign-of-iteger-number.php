<?php

$n = intval(readline());
printSign($n);

function printSign($param) {
    if($param > 0){
        echo "The number $param is positive.";
    } elseif($param < 0){
        echo "The number $param is negative.";
    } elseif ($param === 0) {
        echo "The number $param is zero.";
    }
}
