<?php

// $fruit = ['orange','banana','apple', "grapes"];


// $a = array_slice($fruit, 2, 1);
// $a = array_slice($fruit, 2, 1, true);


// echo "<pre>";

// print_r($a);

// echo "</pre>";


$fruit = ["a" => 'orange', "b" => 'banana', "c" => 'apple', "d" => "grapes"];


$newArray = array_slice($fruit, 1, 2);

print_r($newArray);

?>