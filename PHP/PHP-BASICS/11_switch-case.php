<?php

// $weekday = 1;


// switch ($weekday) {
//     case 1:
//         echo "Today is Monday";
//         break;

//     case 2:
//         echo "Today is Tuesday";
//         break;


//     case 3:
//         echo "Today is Wednesday";
//         break;


//     case 4:
//         echo "Today is Thursday";
//         break;


//     case 5:
//         echo "Today is Friday";
//         break;

//     case 6:
//         echo "Today is Saturday";
//         break;

//     case 7:
//         echo "Today is Sunday";
//         break;

//     default:
//        echo "Enter The Valid Week day";
//         break;
// }   




$per = -10; // You can change this value to test different percentages

switch (true) {
    case ($per < 0):
        echo "Negative number not allowed";
        break;

    case ($per >= 80 && $per <= 100):
        echo "You are in Merit";
        break;

    case ($per >= 60 && $per < 80):
        echo "You are in Ist Division";
        break;

    case ($per >= 45 && $per < 60):
        echo "You are in IInd Division";
        break;

    case ($per >= 33 && $per < 45):
        echo "You are in IIIrd Division";
        break;

    case ($per >= 0 && $per < 33):
        echo "You are Fail";
        break;

    default:
        echo "Please Enter Valid Percentage";
        break;
}
?>

