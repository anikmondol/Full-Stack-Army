<?php

// $fruit = ['orange','banana','apple', "grapes"];

// $veggie = ['carrot', 'pea'];

// $color = ["red", "green", "blue"];




// $add = array_replace($fruit, $veggie, $color);


// echo "<pre>";
// print_r($add);
// echo "</pre>";


// $fruit = ['orange','banana','apple', "grapes"];

// $veggie = [ "a" => 'carrot', "b" => 'pea'];


// $add = array_replace($fruit, $veggie,);


// echo "<pre>";
// print_r($add);
// echo "</pre>";


$array1 = array("a" => array("red"), "b" => array("green", "pink"));
$array2 = array("a" => array("yellow"), "b" => array("black"));


$add = array_replace_recursive($array1, $array2,);


echo "<pre>";
print_r($add);
echo "</pre>";


?>