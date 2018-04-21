<?php

$name = readline();
$currentHealth = intval(readline());
$maxHealth = intval(readline());
$currentEnergy = intval(readline());
$maxEnergy = intval(readline());

echo "Name: $name\n";
echo "Health: |". str_repeat("|", $currentHealth). str_repeat(".", $maxHealth - $currentHealth)."|\n";
echo "Energy: |". str_repeat("|", $currentEnergy). str_repeat(".", $maxEnergy - $currentEnergy)."|\n";
