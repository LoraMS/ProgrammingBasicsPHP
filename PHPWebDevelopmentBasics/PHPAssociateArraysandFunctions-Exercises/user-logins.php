<?php
$users = [];
$failedLogs = 0;
$login = false;
while(true){
    $line = trim(fgets(STDIN));
    if($line == "end"){
        break;
        // out of the loop
    }
    if ($line == "login") {
        $login = true;
        continue;
        // back to top where is while and start again
    }
    $line = explode(" -> ", $line);
    $username = trim($line[0]);
    $password = trim($line[1]);
    if(!$login){
        $users[$username] = $password;
    } else {
        if(isset($users[$username]) && $users[$username] == $password){
            echo $username.": logged in successfully"."\n";
        }else{
            echo $username.": login failed"."\n";
            $failedLogs++;
        }
    }
}

echo "unsuccessful login attempts: ".$failedLogs."\n";


// input
/*
 ivan_ivanov -> java123
pesh0 -> qwerty
stamat4e -> 111111
princess_penka -> MyPrince
login
pesh0 -> qwertt
ivan_ivanov -> java123
stamat4e -> 111112
princess_penka -> MyPrince
end
 */


// var_dump($users);
/*
 array(4) {
  'ivan_ivanov' =>
  string(7) "java123"
  'pesh0' =>
  string(6) "qwerty"
  'stamat4e' =>
  string(6) "111111"
  'princess_penka' =>
  string(8) "MyPrince"
}
 */