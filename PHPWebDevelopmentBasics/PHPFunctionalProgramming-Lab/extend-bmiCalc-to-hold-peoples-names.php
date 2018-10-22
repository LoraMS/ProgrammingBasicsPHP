<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
$arr = [];

$bmi = function($person){
    $arr['name'] = $person['name'];
    $arr['bmi'] = $person['weight']/($person['height']*$person['height']);
    return $arr;
};

$bmiArr = array_map($bmi, $people);

print_r($bmiArr);

