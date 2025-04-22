<?php

// function mm($n, $m) {
//     return $n . "-" .  $m;
// }

// $a = ["orange", "banana", "apple"];


// $new = array_reduce($a, "mm", "dd");


// echo $new;

function mm($n, $m) {
        return $n +   $m;
    }
    
    $a = [11,5,74,9,7];
    
    
    $new = array_reduce($a, "mm", 1);
    
    
    echo $new;
    

?>