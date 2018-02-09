<?php

$age = readline();
$gender = readline();

if($gender === "m"){
    if ($age < 16) {
        echo "Master";
    } else {
        echo "Mr.";
    }
} else {
    if ($age < 16) {
        echo "Miss";
    } else {
        echo "Ms.";
    }
}

