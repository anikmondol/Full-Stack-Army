<?php

// task-1

// $name = "Anik";
// $age = 24;

// echo "My Name is : $name";
// echo "My Age is : $name";

// task-2

// $age = 17;

// if ($age >= 18) {
//    echo "তুমি ভোট দিতে পারো";
// }else{
//      echo "তুমি ভোট দিতে পারো না";
// }


// task-3


// for ($i=1; $i < 6; $i++) { 
//     echo $i . "\n";
// }


// task-4

// $fruits = ["d", "c", "a"];

// foreach ($fruits as $key => $value) {
//     echo $value . "\n";
// }


// task-5

// function greet($name){
//     echo "Hello $name";
// }


// greet("anik");

// task-6

// $a = 1;

// while ($a <= 5) {
//     echo $a , "\n";
//     $a++;
// }

// task-7

// $person = [
//     "name" => "Anik",
//     "age" => 21,
//     "city" => "Dhaka"
// ];

// foreach ($person as $key => $value) {
//     echo $value . "\n";
// }

// task-8

// $day = "Monday";

// switch ($day) {
//     case 'Monday':
//         echo "সপ্তাহের শুরু";
//         break;
//     case 'Friday':
//         echo "শুক্রবার";
//         break;

//     default:
//         echo "অন্যান্য দিন";
//         break;
// }

// task-9

// $text = "Hello World";

// echo strlen($text) . "\n";
// echo strtolower($text) . "\n";
// echo substr($text, 0, 5) . "\n";


// task-10

// function add(int $a, int $b): int {
//     return $a + $b;
// }


// $sum = add(10, 20);

// echo $sum;

// task-11

// for ($i= 1; $i < 4; $i++) { 

//     for ($j=1; $j < 4; $j++) { 
//        echo $j;
//     }

//     echo "\n";

// }

// task-12

// const SIT_NAME = "my sit";

// echo SIT_NAME;

// task-13

// $x = "13";

// if (is_numeric($x)) {
//     echo "yes";
// }else{
//     echo "No";
// }


// task-14

// $names = "Anik,Rafi,Mehedi";
// $array = explode(",", $names);

// foreach ($array as $key => $value) {
//     echo $value . "\n";
// }

// task-15

// $numbers = [5, 2, 8, 1];
// $count = count($numbers);

// for ($i = 0; $i < ($count - 1); $i++) {

//     for ($j = 0; $j < ($count - $i - 1); $j++) {

//         if ($numbers[$j] > $numbers[$j + 1]) {


//             $temp = $numbers[$j];
//             $numbers[$j] = $numbers[$j + 1];
//             $numbers[$j + 1] = $temp;
//         }
//     }
// }


// task-16


// echo "Ascending (using loop): ";
// print_r($numbers);

// $fileName = "hello.txt";

// file_put_contents($fileName, ". I LOVE PROGAMING ");
// file_put_contents($fileName, ". I LOVE PROGAMING ", FILE_APPEND);

// echo file_get_contents($fileName);


// task-17

// $numbers = ["PHP", "is", "awesome"];

// $str = implode("  ", $numbers);

// echo $str;

// task-18


// $a = "";
// $b = "Anik";

// echo "a: " . (isset($a) ? "set" : "not set") . ", " . (empty($a) ? "empty" : "not empty") . "\n";
// echo "b: " . (isset($b) ? "set" : "not set") . ", " . (empty($b) ? "empty" : "not empty");

// task-19

// echo date("d-m-Y h:i A");

// task-20

echo "এই স্ক্রিপ্ট রান হচ্ছে: " . $_SERVER['PHP_SELF'];

