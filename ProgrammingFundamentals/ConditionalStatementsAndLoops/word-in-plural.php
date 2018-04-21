<?php

$word = readline();
$lastLetter = substr($word, -1);

if ($lastLetter === "y") {
    $word = substr($word, 0, -1) . "ies";
} elseif ($lastLetter === "o" || $lastLetter === "h" || $lastLetter === "s" || $lastLetter === "x" || $lastLetter === "z") {
    $word .= "es";
} else {
    $word .= "s";
}
echo $word;