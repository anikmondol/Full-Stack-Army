<?php

$str = "Yahoo Baba       ";

echo $str . "<br>";


// echo trim($str, "a");
// echo rtrim($str, "a");
// echo ltrim($str, "Y");
echo chop($str, "ba");



?>