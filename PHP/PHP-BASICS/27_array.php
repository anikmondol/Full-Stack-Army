<?php

// $colors = array('red',20,'blue',12.50);
$colors = ['red',20,'blue',12.50];

// echo $colors[0].'<br>';
// echo $colors[1].'<br>';
// echo $colors[2].'<br>';
// echo $colors[3].'<br>';


// $colors[0] = 1;
// $colors[1] = 2;
// $colors[2] = 3;
// $colors[3] = 4;


// echo "<pre>";
// print_r($colors);
// echo "</pre>";

echo "<ul>";

foreach ($colors as $key => $value) {
  echo "<li>" . $value . "</li>";
}

echo "</ul>";



?>