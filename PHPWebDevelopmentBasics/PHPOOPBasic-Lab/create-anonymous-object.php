<?php
$book = new stdClass();
$book->author = 'Peter Petrov';
$book->title = 'Php Web Development';
$book->price = '20 EUR';
$book->ganre = 'programming';
$book->publisher = 'Press';
$book->year = '2018';
$book->pages = '450';
$book->language = 'english';
$book->totalPrint = '10000';
$book->coverArtist = 'Ivan Ivanov';

foreach ($book as $key => $value){
    echo $key . '->' . $value . "\r\n";
}
