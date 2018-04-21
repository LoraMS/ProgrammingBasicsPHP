<?php

$type = readline();
$first = readline();
$second = readline();

function compareIntegers($first, $second) {
    $maxInt = max($first, $second);
    echo $maxInt;
}

function compareChars($first, $second) {
    $maxChar = max($first, $second);
    echo $maxChar;
}

function compareStrings($first, $second) {
    $maxString = max($first, $second);
    echo $maxString;
}

if ($type === "string") {
    compareStrings($first, $second);
} else if ($type === "int") {
    compareIntegers($first, $second);
} else if ($type === "char") {
    compareChars($first, $second);
}

