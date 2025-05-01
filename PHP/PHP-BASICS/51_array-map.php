<?php

// function square($n, $m){

//     return [$n => $m];

// }

// $a = [1, 2, 3, 4, 5];

// $fruits = array(
//     'a' => "Lemon",
//     'b' => "Orange",
//     'c' => "Banana",
//     'd' => "Apple"
// );


// $newArray = array_map(null, $a, $fruits);





// echo "<pre>";
// print_r($newArray);

function up($n){

    return strtoupper($n);

}

$a = array ('one' => "Apple", 'two' => "Banana");

$newArray = array_map('up', $a);


echo "<pre>";
print_r($newArray);

?>