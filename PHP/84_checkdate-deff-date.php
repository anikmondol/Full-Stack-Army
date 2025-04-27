<?php

// echo checkdate(2, 15, 2064);


// $date1 = date_create("2013-03-15");
// $date2 = date_create("2013-12-12");

// $diff = date_diff($date1, $date2);

// echo $diff->days . " days";

// echo "<pre>";
// print_r($diff);

$date1 = date_create("2013-12-15");
$date2 = date_create("2013-03-12");

$diff = date_diff($date1, $date2);

// echo $diff->days . " days";

// echo $diff->format("%R %a days");

echo $diff->format("%r %a days");

echo "<pre>";
print_r($diff);



?>