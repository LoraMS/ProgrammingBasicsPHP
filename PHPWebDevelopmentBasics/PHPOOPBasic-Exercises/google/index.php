<?php

require_once 'person.php';

function getPeople (): array
{
    $people = array();
    while (true) {
        $personInfo = explode(' ', trim(fgets(STDIN)));
        if ($personInfo[0] === 'End') {
            break;
        }
        $isPersonPresentInList = true;
        $name = $personInfo[0];
        $person = personExists($people, $name);
        if (!isset($person)) {
            $person = new Person($name);
            $isPersonPresentInList = false;
        }
        switch ($personInfo[1]) {
            case 'company':
                $companyName = $personInfo[2];
                $companyDepartment = $personInfo[3];
                $companySalary = floatval($personInfo[4]);
                $company = new Company($companyName, $companyDepartment, $companySalary);
                $person->setCompany($company);
                break;
            case 'pokemon':
                $pokemonName = $personInfo[2];
                $pokemonType = $personInfo[3];
                $pokemon = new Pokemon($pokemonName, $pokemonType);
                $person->addPokemon($pokemon);
                break;
            case 'parents':
                $parentsName = $personInfo[2];
                $parentsBirthday = $personInfo[3];
                $parents = new Parents($parentsName, $parentsBirthday);
                $person->addParent($parents);
                break;
            case 'children':
                $childName = $personInfo[2];
                $childBirthday = $personInfo[3];
                $child = new Child($childName, $childBirthday);
                $person->addChildren($child);
                break;
            case 'car':
                $carModel = $personInfo[2];
                $carSpeed = intval($personInfo[3]);
                $car = new Car($carModel, $carSpeed);
                $person->setCar($car);
                break;
        }
        if (!$isPersonPresentInList) {
            $people[] = $person;
        }
    }
    return $people;
}

function personExists(array $people, string $name)
{
    foreach ($people as $person) {
        if ($person->getName() === $name) {
            return $person;
        }
    }
    return null;
}

$people = getPeople();
$name = trim(fgets(STDIN));
echo personExists($people, $name);