<?php

// Variant 1
//$numbers = explode(' ', readline());;
//
//$count = array_count_values($numbers); // get count of occurrence for each number
//
//arsort($count); // sort by occurrence, descending
//
//$first = key($count); // get key of first element, because that is the/one
//                      // of the highest number(s)
//$count_first = current($count); // get occurrence for first array value
//
//// 4 1 1 4 2 3 4 4 1 2 4 9 3
//echo $first; // 4
////echo $count_first; // 5


//Variant 2
$arr = explode(' ', readline());

$bestMatch = $arr[0];
$bestCounter = 0;
$sorted = $arr;
sort($sorted);

for ($i = 0; $i < count($arr); $i++) {
    $currentCounter = 0;
    for ($j = 0; $j < count($arr); $j++) {
        if ($arr[$i] === $arr[$j]) {
            $currentCounter++;
            if ($currentCounter > $bestCounter) {
                $bestCounter = $currentCounter;
                $bestMatch = $arr[$i];
            }
        } 
    }
}

echo $bestMatch . PHP_EOL;
echo $bestCounter;


/*
 $arr = explode(' ', readline());
sort($arr); 

$bestMatch = $arr[0];
$bestCounter = 1;
$currentCounter = 1;

for ($i = 0; $i < count($arr)-1; $i++) {
    $currentMatch = $arr[$i];
    if ($currentMatch === $arr[$i + 1]) {
        $currentCounter++;
        if($currentCounter > $bestCounter){
            $bestCounter = $currentCounter;
            $bestMatch = $currentMatch;
        }
    } else {
        $currentCounter = 1;
    }
}

echo $bestMatch.PHP_EOL;
echo $bestCounter;
 */






// // Sort the array 
//    sort($arr); 
//    sort($arr , $n); 
//  
//    // find the max frequency  
//    // using linear traversal 
//    $max_count = 1;  
//    $res = $arr[0];  
//    $curr_count = 1; 
//    for ($i = 1; $i < $n; $i++)  
//    { 
//        if ($arr[$i] == $arr[$i - 1]) 
//            $curr_count++; 
//        else 
//        { 
//            if ($curr_count > $max_count) 
//            { 
//                $max_count = $curr_count; 
//                $res = $arr[$i - 1]; 
//            } 
//            $curr_count = 1; 
//        } 
//    } 
//  
//    // If last element  
//    // is most frequent 
//    if ($curr_count > $max_count) 
//    { 
//        $max_count = $curr_count; 
//        $res = $arr[$n - 1]; 
//    } 
//  
//    return $res; 
//} 
//  
//// Driver Code 
//{ 
//    $arr = array(1, 5, 2, 1, 3, 2, 1); 
//    $n = sizeof($arr) / sizeof($arr[0]); 
//    echo mostFrequent($arr, $n); 
//    return 0; 
//}