<?php

function compare($a, $b){

    if ($a === $b) {
       return 0;
    }
    
    return ($a > $b) ? 1 : -1;

}


function compareValue($a, $b){

    if ($a === $b) {
       return 0;
    }
    
    return ($a > $b) ? 1 : -1;

}

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

$a2 = array("a" => "red", "f" => "green", "d" => "purple");

$a3 = array("a" => "red", "b" => "green", "h" => "purple");


// $new1 = array_intersect($a1, $a2, $a3);
// $new1 = array_intersect_key($a1, $a2);
// $new1 = array_intersect_assoc($a1, $a2);
// $new1 = array_intersect_uassoc($a1, $a2, "compare");
// $new1 = array_intersect_ukey($a1, $a2, "compare");
$new1 = array_uintersect_uassoc($a1, $a2, "compare", "compareValue");


echo "<pre>";
print_r($new1);




?>