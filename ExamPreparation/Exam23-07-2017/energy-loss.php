<?php

$days = intval(readline());
$dancers = intval(readline());
$energy = 0;
$allDaysEnergy = 100*$dancers*$days;

for ($index = 1; $index <= $days; $index++) {
    $hours = intval(readline());
    if ($index % 2 === 0 && $hours % 2 === 0) {
        $energy += $dancers * 68;
    } elseif ($index % 2 !== 0 && $hours % 2 === 0) {
        $energy += $dancers * 49;
    } elseif ($index % 2 === 0 && $hours % 2 !== 0) {
        $energy += $dancers * 65;
    } elseif ($index % 2 !== 0 && $hours % 2 !== 0) {
        $energy += $dancers * 30;
    }
}

$energyLeftAllDays = $allDaysEnergy - $energy;
$energyLeftPerDay = ($energyLeftAllDays / $dancers) / $days;

if($energyLeftPerDay >= 50){
    echo "They feel good! Energy left: ". number_format($energyLeftPerDay, 2, ".", "");
} else {
    echo "They are wasted! Energy left: ". number_format($energyLeftPerDay, 2, ".", "");
}
