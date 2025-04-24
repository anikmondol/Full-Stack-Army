<?php

$str = "Yahoo Baba";

// $array = str_split($str, 2);
$newStr = chunk_split($str, 2, ".");

echo "<pre>";
print_r($newStr);



?>