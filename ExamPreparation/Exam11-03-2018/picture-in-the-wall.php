<?php

$width = intval(readline());
$length = intval(readline());
$pictureWidth = intval(readline());
$pictureCount = intval(readline());

$holeArea = $width * $length;
$pictureArea = $pictureWidth * $pictureWidth;
$picturesArea = $pictureArea * $pictureCount;
$difference = abs($holeArea - $picturesArea);

if($holeArea >= $picturesArea){
    echo "The pictures fit in the hole. Hole area is $difference bigger than pictures area.";
} else {
    echo "The pictures don't fit in the hole. Picture area is $difference bigger than hole area.";
}
    