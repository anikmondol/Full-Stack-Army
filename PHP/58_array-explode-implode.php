<?php

// $a = "Hello how are you";
$a = "red,green,blue,orange";


$new = explode(",", $a);


// $d = implode("-",$new);
$d = join("-",$new);

echo "<pre>";
print_r($d);



?>