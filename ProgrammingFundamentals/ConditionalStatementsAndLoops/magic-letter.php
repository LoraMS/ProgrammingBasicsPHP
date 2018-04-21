<?php

$startLetter = readline();
$endLetter = readline();
$excludingLetter = readline();

for ($i = ord($startLetter); $i <= ord($endLetter); $i++) {
    for ($j = ord($startLetter); $j <= ord($endLetter); $j++) {
        for ($s = ord($startLetter); $s <= ord($endLetter); $s++) {
            if(chr($i) !== $excludingLetter && chr($j) !== $excludingLetter && chr($s) !== $excludingLetter){
                echo chr($i).chr($j).chr($s) . " ";
            }
        }
    }
}
