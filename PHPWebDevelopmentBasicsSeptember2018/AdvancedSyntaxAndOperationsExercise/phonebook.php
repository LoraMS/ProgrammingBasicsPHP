<?php

$phoneBook = [];

while (true) {
   $input = explode(' ',readline());
   if($input[0] === "END"){
       break;
   } elseif ($input[0] === "A") {
       $name = $input[1];
       $phone = $input[2];
       $phoneBook[$name] = $phone;
   } elseif ($input[0] === "S") {
       $name = $input[1];
       if(array_key_exists($name,$phoneBook)){
            echo $name." -> ".$phoneBook[$name].PHP_EOL;
        } else {
            echo "Contact $name does not exist.".PHP_EOL;
        }
   }
}

