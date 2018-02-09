<?php

echo "Enter one integer: ";
$n = intval(readline());
$n2 = 2 * $n;
echo "Number of the elements = $n2\n";
$count = 0;
$numOfSum = 0;
$difference = 0;
$sumDifference = 0;

for ($i = 1; $i <= $n2; $i++) {
    $count += 1;
    if ($count === 1) {
        echo "Enter element $i = ";
        $first = intval(readline());
    } elseif ($count === 2) {
        echo "Enter element $i = ";
        $second = intval(readline());
        $numOfSum += 1;
        $count = 0;
        if($numOfSum === 1){
            $firstSum = $first + $second;
            $maxSum = $firstSum;
            $maxIndex = $i;
        } else {
            $sum = $first + $second;
            $difference = $sum - $firstSum;
            $sumDifference += $difference;
            if($sum > $maxSum){
                $maxSum = $sum;
                $maxIndex = $i;
            }
        }     
    }
}

if( $sumDifference === 0){
    echo "Max sum = $maxSum";
} else{
    echo "Max sum = $maxSum\n";
    echo "Index of the max sum = ".($maxIndex/2)."\n";
}
