<?php

if(isset($_GET['filter'])){
    $delimiter = $_GET['delimiter'];
    $names = explode($delimiter, $_GET['names']);
    $ages = explode($delimiter, $_GET['ages']);
}

include "render-students-info-frontend.php";