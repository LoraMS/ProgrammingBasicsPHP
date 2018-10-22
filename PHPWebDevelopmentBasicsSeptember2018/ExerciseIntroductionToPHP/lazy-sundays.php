<?php

//$month = date('m');
//$year = date('Y');
//$days = date('t');
//for ($day = 1; $day <= $days; $day++) {
//    $currentDate = date($day . '-' . $month . '-' . $year);
//    if (date('w', strtotime($currentDate)) == 0) {
//        echo date('jS m, Y', strtotime($currentDate)) . PHP_EOL;
//    }
//}


//$month  = date('m', strtotime(readline()));
//$days = cal_days_in_month(CAL_GREGORIAN, $month, 2018);
//for($i = 1; $i <= $days; $i++){
//   if(date('N', strtotime(2018 . '-' . $month . '-' . $i)) == 7){
////   echo date("jS m, Y", strtotime($day)). " ".PHP_EOL;
//       echo $i ."rd ".$month. ", "."2018\n";
//   }
//}

$date = readline();
$month = date('m', strtotime("$date 1 2018"));
$last_day = intval(date("t", strtotime("$date 1 2018")));
for ($i = 1; $i <= $last_day; $i++) {
    if (date('N', strtotime("$date $i 2018")) == 7) {
        echo date('j',strtotime("$date $i 2018")) . "rd $month, 2018\n";
    }
}