<?php

$letterStart = readline();
$letterEnd = readline();
$letterExclude = readline();

$counter = 0;

for ($i = ord($letterStart); $i <= ord($letterEnd); $i++) {
    for ($j = ord($letterStart); $j <= ord($letterEnd); $j++) {
        for ($z = ord($letterStart); $z <= ord($letterEnd); $z++) {
            if ($i !== ord($letterExclude) && $j !== ord($letterExclude) && $z !== ord($letterExclude)) {
                $counter ++;
                echo chr($i).chr($j).chr($z)." ";
            }
        }
    }
}
 echo $counter;