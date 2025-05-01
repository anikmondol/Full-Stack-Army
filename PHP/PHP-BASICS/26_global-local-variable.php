<?php

// $x = 10;

// function test() {
    
//     global $x;

//     echo "Variable X inside function : $x <br>";

// }


// test();

// echo $x;

$x = 10;

$y = 5;

function test() {
    
    global $x, $y;

    $x = $x + $y;
    

}


test();

echo $x;

?>