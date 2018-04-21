<?php

$days = ["Monday","Tuesday", "Wednesday", "Thursday", "Friday","Saturday", "Sunday"];

$num = intval(readline());
if($num > 0 && $num < 8){
echo $days[$num - 1];
} else{
    echo "Invalid Day!";
}
