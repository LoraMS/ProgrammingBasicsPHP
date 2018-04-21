<?php

function headerReceipt() {
    echo "CASH RECEIPT\n";
    echo "------------------------------"."\n";
}

function bodyReceipt() {
    echo "Charged to____________________"."\n";
    echo "Received by___________________"."\n";
}

function footerReceipt() {
    echo "------------------------------"."\n";
    echo "\u00A9"." SoftUni";
}

function printReceipt(){
    headerReceipt();
    bodyReceipt();
    footerReceipt();
}

printReceipt();