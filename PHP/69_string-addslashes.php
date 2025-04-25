<?php

$str = "Hello I am Yahoo Baba";

// echo $str . "<br>";


// $new = addslashes($str);

// echo $new . "<br>";

// echo stripslashes($new);


$ss = addcslashes($str, "Y");

echo $ss . "<br>";

echo stripcslashes($ss);





?>