<?php

$score = intval(readline());
$bonus = 0;

if($score <= 100){
    $bonusScore += 5;
} elseif ($score <= 1000) {
    $bonusScore += $score * 0.2;
} else {
    $bonusScore += $score * 0.1;
}

if ($score % 2 === 0) {
    $bonusScore = $bonusScore + 1;
} elseif ($score % 10 === 5) {
    $bonusScore = $bonusScore + 2;
}

echo $bonusScore."\n";
echo $score + $bonusScore;