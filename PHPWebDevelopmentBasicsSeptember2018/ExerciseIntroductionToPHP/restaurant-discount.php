<?php

$people = intval(readline());
$package = strtolower(readline());
$hall = '';
$discount = 0;
$priceHall = 0;
$pricePackage = 0;

if ($people <= 50) {
    $hall = 'Small Hall';
    $priceHall = 2500;
} elseif ($people <= 100) {
    $hall = 'Terrace';
    $priceHall = 5000;
} elseif ($people <= 120) {
    $hall = 'Small Hall';
    $priceHall = 7500;
} else{
    echo "We do not have an appropriate hall."; 
    exit(0);
}

if ($package === 'normal') {
    $pricePackage = 500;
    $discount = 0.05;
} elseif ($package === 'gold') {
    $pricePackage = 750;
    $discount = 0.10;
} elseif ($package === 'platinum') {
    $pricePackage = 1000;
    $discount = 0.15;
}

$price = $priceHall + $pricePackage;
$priceAfterDiscount = $price - $price * $discount;
$pricePerMan = $priceAfterDiscount / $people;

echo 'We can offer you the ' . $hall . PHP_EOL;
echo 'The price per person is ' . number_format($pricePerMan, 2, '.', '') . '$';

/*
 <?php

$groupSize = intval(readline());
$package = strtolower(readline());
$price = 0;
$hall = "";

if($groupSize <= 50){
    $hall = "Small Hall";
    $price += 2500;
} elseif($groupSize > 50 && $groupSize <= 100){
    $hall = "Terrace";
    $price += 5000;
} elseif($groupSize > 100 && $groupSize <= 120){
    $hall = "Great Hall";
    $price += 7500;
} elseif ($groupSize > 120) {
   echo "We do not have an appropriate hall."; 
   exit(0);
}

if ($package === "normal") {
    $price += 500;
    $price -= $price * 0.05;
} elseif ($package === "gold") {
    $price += 750;
    $price -= $price * 0.10;
} elseif ($package === "platinum") {
    $price += 1000;
    $price -= $price * 0.15;
} 
$pricePerPeople = $price / $groupSize;

echo "We can offer you the $hall\n";
echo "The price per person is ". number_format($pricePerPeople, 2, ".", "")."$";
 */