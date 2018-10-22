<?php

include "Person.php";
include "Family.php";

$n = intval(fgets(STDIN));
$family = new Family();

for($i = 0; $i < $n; $i++){
    $line = explode(' ', trim(fgets(STDIN)));

    list($name, $age) = $line;
    $member = new Person($name, $age);
    $family->addMember($member);
}

$oldestMember = $family->getOldestMember();
echo $oldestMember->getName() . ' ' . $oldestMember->getAge();