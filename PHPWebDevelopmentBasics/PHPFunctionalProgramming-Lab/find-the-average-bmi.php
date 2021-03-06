<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];

$bmi = function($person){
    return $person['weight']/($person['height']*$person['height']);
};

$bmiArr = array_map($bmi, $people);

$bmiCalcAvg = function($sum, $bmiPerson){
    return $sum + $bmiPerson;
};

$bmiSum = array_reduce($bmiArr, $bmiCalcAvg);

$bmiAvg = $bmiSum / count($bmiArr);
print_r($bmiAvg);