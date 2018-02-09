<?php

$skumriaPrice = readline();
$cacaPrice = readline();
$palamudKg = readline();
$safridKg = readline();
$midiKg = readline();

$palamudPrice = $skumriaPrice + $skumriaPrice * 0.6;
$safridPrice = $cacaPrice + $cacaPrice * 0.8;
$midiPrice = 7.5;

$palamud = $palamudKg * $palamudPrice;
$safrid = $safridKg * $safridPrice;
$midi = $midiKg * $midiPrice;

$amount = $palamud + $safrid + $midi;

printf("%.2f", $amount);
