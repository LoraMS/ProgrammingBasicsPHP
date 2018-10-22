<?php

include "Person.php";

$people = [];

while(true){
    $input = explode(' ', trim(fgets(STDIN)));

    if ($input[0] === 'END') {
        break;
    }

    list($name, $age, $occupation) = $input;

    $people[] = new Person($name, $age, $occupation);
}

usort($people, function (Person $firstPerson, Person $secondPerson) {
    return $firstPerson->getAge() > $secondPerson->getAge();
});

foreach ($people as $person) {
    echo $person . PHP_EOL;
}