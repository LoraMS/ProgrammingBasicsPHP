<?php

function findCommonEnd($text1, $text2) {
    $array1 = explode(" ", $text1);
    $array2 = explode(" ", $text2);
    $counter = 0;
    for ($i = 0; $i < min(count($array1), count($array2)); $i++) {
        if($array1[$i] === $array2[$i]) {
            $counter ++;
        } else {
            break;
        }
    }
    return $counter;
}

$text1 = readline();
$text2 = readline();
$result = findCommonEnd($text1, $text2);

$text1Revert = strrev($text1);
$text2Revert = strrev($text2);
$resultRevert = findCommonEnd($text1Revert, $text2Revert);

if ($result >= $resultRevert) {
    echo $result;
} else {
    echo $resultRevert;
}


// $text1 = "I love programming";
// $text2 = "Learn Java or C#";

// $text1 = "hi php java csharp sql html css js";
// $text2 = "hi php java js softuni nakov java learn";

// $text1 = "hi php java xml csharp sql html css js";
// $text2 = "nakov java sql html css js";

// print_r(explode(" ",$text1));
// print_r(explode(" ", $text2));


// allocate array
//for ($x = 0; $x <= 10; $x++)
//{
//    $array[] = $x;
//}