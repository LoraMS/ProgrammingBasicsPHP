<?php

include 'Person.php';

$name = trim(fgets(STDIN));
$person = new Person($name);

echo $person;

//$fields = count(get_object_vars($person));
//$methods = count(get_class_methods($person));
//
//if ($fields != 1 || $methods != 1) {
//    throw new Exception("Too many fields or methods");
//}

