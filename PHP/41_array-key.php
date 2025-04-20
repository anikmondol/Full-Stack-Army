<?php

$color = ["red", "green", "blue", "yellow", "brow"];


// print_r(array_keys($color));
// print_r(array_key_first($color));
// print_r(array_key_last($color));
// print_r(array_key_exists(1,$color));
// print_r(key_exists(1,$color));


if (key_exists(12, $color)) {
    echo "ok";
} else {
    echo "no";
}



?>