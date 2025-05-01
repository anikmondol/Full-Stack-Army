<?php

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "a" => "red");

// $v = array_values($a1);
// $v = array_keys($a1);
$v = array_unique($a1);

echo "<pre>";
print_r($v);


?>