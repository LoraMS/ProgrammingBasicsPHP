<?php

$n = intval(readline());
$blankSpace = (2*$n - 4)/2 - 3;

echo "@".str_repeat(" ", (2*$n - 4)/2)."@".str_repeat(" ", (2*$n - 4)/2)."@\n";
echo "**".str_repeat(" ", $n - 3)."*".str_repeat(" ", $n - 3)."**\n";

for ($index = 1,$dots = 1; $index <= $n / 2 - 2; $index++, $dots += 2) {
    echo "*".str_repeat(".", $index)."*".str_repeat(" ", $blankSpace)."*".str_repeat(".", $dots)."*".str_repeat(" ", $blankSpace)."*".str_repeat(".", $index)."*\n";
    $blankSpace -= 2;
}

echo "*".str_repeat(".", $n/2-1)."*".str_repeat(".", $dots)."*".str_repeat(".", $n/2 - 1)."*\n";
echo "*".str_repeat(".", $n/2).str_repeat("*", $n/2 - 2).str_repeat(".", 1). str_repeat("*", $n/2 - 2).str_repeat(".", $n/2)."*\n";

echo str_repeat("*", 2*$n - 1)."\n";
echo str_repeat("*", 2*$n - 1);


//$middleDots = 1;
//$middleSpace = 2;
//
//echo "@".str_repeat(" ", (2*$n - 4)/2)."@".str_repeat(" ", (2*$n - 4)/2)."@"."\n";
//echo "**".str_repeat(" ", (2*$n - 5)/2)."*".str_repeat(" ", (2*$n - 5)/2)."**"."\n";
//
//for ($index = 1; $index <= $n/2; $index++) {
//    if($index === $n/2 - 1){
//        echo "*".str_repeat(".", $index)."*".str_repeat(" ", ((2*$n - 5)/2)-$middleSpace).str_repeat(".", $middleDots)."*".str_repeat(" ",((2*$n - 5)/2)-$middleSpace).str_repeat(".", $index)."*\n";
//    } elseif ($index === $n/2) {
//        echo "*".str_repeat(".", $index).str_repeat("*", ($middleDots-2)/2).str_repeat(".", 1).str_repeat("*", ($middleDots-2)/2).str_repeat(".", $index)."*\n";
//    } else {
//        echo "*".str_repeat(".", $index)."*".str_repeat(" ", ((2*$n - 5)/2)-$middleSpace)."*".str_repeat(".", $middleDots)."*".str_repeat(" ",((2*$n - 5)/2)-$middleSpace)."*".str_repeat(".", $index)."*\n";
//    }
//    
//    $middleDots += 2;
//    $middleSpace +=2;
//}
//
//echo str_repeat("*", (2*$n - 1))."\n";
//echo str_repeat("*", (2*$n - 1))."\n";
//
//

