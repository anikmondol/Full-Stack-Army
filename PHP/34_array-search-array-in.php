<?php

$food = array('orange','banana','apple', 55, "grapes");


// echo array_search('apple', $food);

// echo in_array('apple', $food);


// if (in_array('55', $food, true)) {
//    echo "ok";
// } else {
//    echo "no";
// }


$a = array(array('p', 'h'),array('p', 'r'), 'o');

if (in_array('p', $a[0], true)) {
   echo "ok";
} else {
   echo "no";
}


?>