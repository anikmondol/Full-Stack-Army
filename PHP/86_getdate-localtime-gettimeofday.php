<?php


// $olddate = mktime(0,0,0,03,15,2015);



// $date = getdate($olddate);
// echo $date['wday']."-".$date['month']."-".$date['year'] . "<br>";



// $date = getdate();
// echo $date['wday']."-".$date['month']."-".$date['year'];



// echo "<pre>";
// print_r(getdate());






echo "<pre>";
print_r(gettimeofday());

// $date = gettimeofday();


// echo $date['minuteswest'];

// echo gettimeofday(true);


// echo "<pre>";
// print_r(localtime(time(), true));


$olddate = mktime(0,0,0,03,15,2015);

echo "<pre>";
print_r(localtime($olddate, true));


?>