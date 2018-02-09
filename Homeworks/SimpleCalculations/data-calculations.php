<?php

$birthData = readline();

$stringToTime = strtotime($birthData); // 793666800

echo date("d-m-Y", strtotime("+999 day", $stringToTime));

// another solution -> with class

echo "\n";

$inputDate = readline();

$d = new DateTime($inputDate);
$d->modify("+999 days");
$outputDate = $d->format("d-m-Y");

echo $outputDate;