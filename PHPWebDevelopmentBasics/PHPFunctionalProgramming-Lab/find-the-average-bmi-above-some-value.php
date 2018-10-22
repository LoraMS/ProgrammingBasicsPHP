<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
$bmiValue = 30;
$initial_sum_and_count = [0, 0];
$bmi = function($person){
    return $person['weight']/($person['height']*$person['height']);
};

$bmiArr = array_map($bmi, $people);

$bmiCalcAvg = function($sum_and_count, $bmiPerson) use ($bmiValue){
    list($sum, $count) = $sum_and_count;
    if($bmiPerson > $bmiValue){
        $count ++;
        $sum += $bmiPerson;
    }
    return [$sum, $count];
};

// list($sum, $count) = result array [$sum, $count] from reduce
list($sum, $count) = array_reduce($bmiArr, $bmiCalcAvg, $initial_sum_and_count);
$bmiAvg = $sum / $count;
print_r($bmiAvg);

//$sum_and_count = [0, 0];
//list($sum, $count) = $sum_and_count;
//echo $sum; // 0


//$bmiCount = 0;
// // pass $bmiCount by reference with "&"
//$bmiCalcAvg = function($sum, $bmiPerson) use ($bmiValue, &$bmiCount){
//    if($bmiPerson > $bmiValue){
//        $sum += $bmiPerson;
//        $bmiCount ++;
//    }
//    return $sum;
//};
//
//$bmiSum = array_reduce($bmiArr, $bmiCalcAvg);
//$bmiAvg = $bmiCalcAvg / $bmiCount;
//print_r($bmiAvg);


