<?php

$firstName = readline();
$lastName = readline();
$age = readline();
$homeTown = readline();

// echo "You are $firstName $lastName, a $age-years old person from $homeTown.";

printf("You are %s %s, a %d-years old person from %s.", $firstName, $lastName, $age, $homeTown);