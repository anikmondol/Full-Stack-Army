<?php

$veggie = array("1" => "Carrot", "2" => "Tomatoes");

$fruits = array(
    $veggie,
    'a' => "Lemon",
    'b' => "Orange",
    'c' => "Banana",
    'd' => "Apple"
);



// array_walk($fruits, "myFunction", "is a key of");


// function myFunction($value, $key, $param){

//     echo "$key $param $value <br>";

// }


array_walk_recursive($fruits, "myFunction", "is a key of");


function myFunction($value, $key, $param){

    echo "$key $param $value <br>";

}

?>