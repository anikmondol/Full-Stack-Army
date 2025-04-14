<?php


// $a = 3;
// $b = 10;


// if ($a < $b) {

//     echo "A is Smaller";

// }

// if ($a < $b) :

//     echo "A is Smaller";

// endif;


// $age = 20;


// if ($age >= 18 && $age <= 21) {
    
//     echo "You are eligible";

// }


// $x = 15;

// if ($x > 30) {
//     echo "X is Greater";
// } else {
//     echo "X is Smaller";
// }


// $name = "Yahoo Baba";
// $gender = "Female";

// if ($gender == "male") {
//     echo "Hello Mr." . $name;
// } else {
//     echo "Hello Miss." . $name;
// }


$per = 55;


if ($per >= 80 && $per <= 100) {
    echo "You are in Merit";
} elseif ($per >= 60 && $per < 80){
    echo "You are in Ist Division";
} elseif ($per >= 45 && $per < 60){
    echo "You are in IInd Division";
} elseif ($per >= 33 && $per < 45){
    echo "You are in IIIrd Division";
} elseif ($per < 33){
    echo "You are Fail";
} else {
    echo "Please Enter Valid Percentage";
}
