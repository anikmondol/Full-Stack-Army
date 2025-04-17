<?php

// function hello($fname, $lname) {

//     $v = "$fname $lname";

//     return $v;
// }


// $name = hello("Yahoo", "Baba");

// echo "Hello $name";


function hello($math, $eng, $sc) {

        $s = $math + $eng + $sc;

    return $s;
}


$total = hello(10,251,37);

function per($total){

    return $total / 3;

}

echo per($total) . "%";


?>