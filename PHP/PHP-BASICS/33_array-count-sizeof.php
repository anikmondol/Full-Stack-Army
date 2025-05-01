<?php

$food = array('orange','banana','apple', "orange");
$food_array = array(
    'fruits' => array('orange', 'banana', 'apple', 'jakfruits'),
    'veggie' => array('carrot', 'collard', 'pea')
);


// echo count($food);
// echo sizeof($food);

// echo count($food_array['fruits']) . "<br>";
// echo sizeof($food_array['veggie']);


// $len = count($food);

// for ($i=0; $i < $len; $i++) { 
//     echo $food[$i] . "<br>";
// }

echo "<pre>";

print_r(array_count_values($food));

echo "</pre>";

?>