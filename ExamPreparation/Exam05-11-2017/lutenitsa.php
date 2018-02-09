<?php

$tomatosKg = floatval(readline());
$boxes = intval(readline());
$jars = intval(readline());

$lutenitsaKg = $tomatosKg / 5;
$lutenitsaJars = $lutenitsaKg / 0.535;
$lutenitsaBoxes = $lutenitsaJars / $jars;

echo "Total lutenica: ";
echo floor($lutenitsaKg);
echo " kilograms.\n";

if($lutenitsaBoxes > $boxes){
    $boxesLeft = $lutenitsaBoxes - $boxes;
    $jarsLeft = $lutenitsaJars - ($boxes * $jars);
    
    echo floor($boxesLeft);
    echo " boxes left.\n";
    echo floor($jarsLeft);
    echo " jars left.";

} else{
    $boxesNeed = $boxes - $lutenitsaBoxes;
    $jarsNeed = ($boxes * $jars) - $lutenitsaJars;
    
    echo floor($boxesNeed);
    echo " more boxes needed.\n";
    echo floor($jarsNeed);
    echo " more jars needed.";
}
