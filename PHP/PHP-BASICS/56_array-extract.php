<?php

// $a = 22;
// $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');
// extract($color, EXTR_OVERWRITE);
// extract($color, EXTR_SKIP);
// extract($color, EXTR_PREFIX_SAME, 'test');
// extract($color, EXTR_PREFIX_ALL, 'test');


// echo "Value of a : $a <br>";
// echo "Value of a : $test_a <br>";
// echo "Value of a : $test_b <br>";
// echo "Value of a : $test_c <br>";


$firstname = "Yahoo";
$lastname = "Baba";
$age = "20";
$gender = "Male";
$country = "India";


$extra = ['gender', 'country'];


 $newArray = compact('firstname', 'lastname','age', $extra);


 print_r($newArray);

?>