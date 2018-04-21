<?php

$people = intval(readline());
$capacity = intval(readline());
//$counter = 0;
//
//for ($index = 1; $index <= $people; $index+= $capacity) {
//    $counter ++;
//}
//
//echo $counter;

$courses = ceil($people/$capacity);
echo $courses;