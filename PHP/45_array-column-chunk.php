<?php


// $array = array(


//     array(
//         'id' => 2201,
//         'first_name' => "Anil",
//         'last_name' => 'kapoor'
//     ),
//     array(
//         'id' => 2202,
//         'first_name' => "Salman",
//         'last_name' => 'Khan'
//     ),
//     array(
//         'id' => 2203,
//         'first_name' => "John",
//         'last_name' => 'Abraham'
//     )
// );


// $a = array_column($array, 'first_name', "id");


// echo "<pre>";
// print_r($a);


$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");


$v = array_chunk($a1, 3);

echo "<pre>";
print_r($v);