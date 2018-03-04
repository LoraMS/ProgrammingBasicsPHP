<?php

$lectures = intval(readline());
$budget = floatval(readline());
$paymentPerLecture = $budget/$lectures;
$jelev = 0;
$royal = 0;
$roli = 0;
$trofon = 0;
$sino = 0;
$other = 0;

for ($index = 0; $index < $lectures; $index++) {
    $name = readline();
    if ($name === "Jelev") {
        $jelev++;
    } elseif ($name === "RoYaL") {
        $royal++;
    } elseif ($name === "Roli") {
        $roli++;
    } elseif ($name === "Trofon") {
        $trofon++;
    } elseif ($name === "Sino") {
        $sino++;
    } else{
        $other++;
    }
}

echo "Jelev salary: ". number_format($jelev*$paymentPerLecture, 2, ".", "")." lv\n";
echo "RoYaL salary: ". number_format($royal*$paymentPerLecture, 2, ".", "")." lv\n";
echo "Roli salary: ". number_format($roli*$paymentPerLecture, 2, ".", "")." lv\n";
echo "Trofon salary: ". number_format($trofon*$paymentPerLecture, 2, ".", "")." lv\n";
echo "Sino salary: ". number_format($sino*$paymentPerLecture, 2, ".", "")." lv\n";
echo "Others salary: ". number_format($other*$paymentPerLecture, 2, ".", "")." lv\n";
