<?php

$PeshosDamage = intval(readline());
$GoshosDamage = intval(readline());

$PeshosHealth = 100;
$GoshosHealth = 100;
$counter = 1;

while (true) {
    if ($counter % 2 !== 0) {
        $GoshosHealth -= $PeshosDamage;
         if ($GoshosHealth <= 0) {
        echo "Pesho won in " . $counter . "th round.";
        break;
    }
        echo "Pesho used Roundhouse kick and reduced Gosho to $GoshosHealth health.\n";
    } else {
        $PeshosHealth -= $GoshosDamage;
        if ($PeshosHealth <= 0) {
        echo "Gosho won in " . $counter . "th round.";
        break;
    } 
        echo "Gosho used Thunderous fist and reduced Pesho to $PeshosHealth health.\n";
    }
    if ($counter % 3 === 0) {
        $PeshosHealth += 10;
        $GoshosHealth += 10;
    }
        $counter ++;
}

