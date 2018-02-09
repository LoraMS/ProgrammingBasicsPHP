<?php

echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";

/*
 * 1515927628
 * 968536800
 * 1516014028
 * 1516532428
 * 1516719630
 * 1516230000
 * 1515366000
 */

echo date("jS F, Y", strtotime("11.12.10")); 
echo "\n";
// outputs 14th January, 2018 

echo date("jS F, Y", strtotime("11/12/10")), "\n";

// outputs 12th November, 2010 

echo date("jS F, Y", strtotime("11-12-10")), "\n"; 
// outputs 10th December, 2011  


echo date( "Y-m-d", strtotime( "2009-01-31 +1 month" ) ); // PHP:  2009-03-03
echo "\n";
echo date( "Y-m-d", strtotime( "2009-01-31 +2 month" ) ); // PHP:  2009-03-31