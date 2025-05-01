<?php

// $str = "Hello world. The world is nice";

// $find = ["Hello", "World"];
// $replace = ["Hi", "earth"];

// echo str_replace("world", "earth", $str);
// echo str_replace($find, $replace, $str);
// echo str_ireplace("world", "earth", $str);


// $color = ["blue", "red", "green", "yellow"];

// $new = str_replace("red", "pink", $color);

// echo "<pre>";
// print_r($new);


// $str = "Hello world. The world is nice";

// echo substr_replace($str, "earth", 6, 10);


$str = "Hello world. The world is nice";


// echo strtr($str, "eo", "ia");

$array = ["Hello" => "Hi", "world" => "earth"];


echo strtr($str, $array);



?>