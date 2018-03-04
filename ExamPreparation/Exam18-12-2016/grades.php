<?php

$students = intval(readline());
$top = 0;
$between4And5 = 0;
$between3And4 = 0;
$failed = 0;
$sumGrade = 0;

for ($index = 0; $index < $students; $index++) {
    $grade = floatval(readline());
    $sumGrade += $grade;
    if ($grade >= 5.00) {
        $top ++;
    } elseif ($grade < 5.00 && $grade >= 4.00) {
        $between4And5 ++;
    } elseif ($grade < 4.00 && $grade >= 3.00) {
        $between3And4 ++;
    } elseif ($grade < 3.00) {
        $failed ++;
    }
}

$average = $sumGrade / $students;
$topPercent = $top/$students * 100;
$between4And5Percent = $between4And5/$students * 100;
$between3And4Percent = $between3And4/$students * 100;
$failedPercent = $failed/$students * 100;

echo "Top students: ". number_format($topPercent, 2, ".", "")."%\n";
echo "Between 4.00 and 4.99: ". number_format($between4And5Percent, 2, ".", "")."%\n";
echo "Between 3.00 and 3.99: ". number_format($between3And4Percent, 2, ".", "")."%\n";
echo "Fail: ". number_format($failedPercent, 2, ".", "")."%\n";
echo "Average: ". number_format($average, 2, ".", "");
