<?php

$budget = readline();
$presentFirstChild = readline();
$presentSeconrChild = readline();
$presentThirdChild = readline();

$allPresents = $presentFirstChild + $presentSeconrChild + $presentThirdChild;

$allPresentsCosts = ($budget - $allPresents)* 0.10;

$charity = $budget - $allPresents - $allPresentsCosts;

printf("%.2f", $charity);