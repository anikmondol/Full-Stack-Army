<?php

$fruit = ['orange','banana','apple', "grapes"];
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");



// $random =  array_rand($fruit, 2);
// echo $fruit[$random];
// print_r($fruit[$random]);
// echo "<pre>";
// print_r($random);

// echo $fruit[$random[0]] . "<br>";
// echo $fruit[$random[1]];
// $new_array = array_rand($a1, 2);


$new_array = shuffle($a1);

echo "<pre>";
print_r($a1);


?>