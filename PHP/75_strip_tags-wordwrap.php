<?php


// $str = "Hello <b>World</b>, Hello <i>Earth</i>";

// echo $str . "<br>";

// echo strip_tags($str, "<i>")


$str = "This World is beautiful";


echo wordwrap($str, 4, "<br>", true)


?>