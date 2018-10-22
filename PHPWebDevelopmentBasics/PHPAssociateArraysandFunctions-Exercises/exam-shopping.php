<?php
$products = [];
while(true){
    $line = trim(fgets(STDIN));
    if($line === 'exam time'){
        break;
    }

    if($line !== "shopping time"){
        $item = explode(" ", $line);
        $operation = $item[0];
        $product = $item[1];
        $quantity = $item[2];
        if($operation === "stock"){
            if (!isset($products[$product])) {
                $products[$product] = $quantity;
            }
            else {
                $products[$product] += $quantity;
            }
        } elseif($operation === "buy"){
            if (!isset($products[$product])) {
                echo $product." doesn't exist"."\n";
            }
            elseif(isset($products[$product]) && $products[$product] == 0) {
                echo $product." out of stock"."\n";
            } else {
                if ($products[$product] < $quantity) {
                    $products[$product] = 0;
                }
                else {
                    $products[$product] -= $quantity;
                }
            }
        }
    }
}

foreach ($products as $product => $quantity) {
    if ($quantity > 0) {
        echo $product." -> ".$quantity."\n";
    }
}