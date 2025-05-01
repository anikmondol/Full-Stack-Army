<?php

$str = "Hello world. The world is nice";

// echo strpos($str, "world", 1);
// echo strrpos($str, "world", 1);
// echo stripos($str, "World", 1);
// echo strripos($str, "World", 1);

// echo strstr($str, "world", true) . "<br>";
// echo strstr($str, "world");
// echo stristr($str, "World", true) . "<br>";
// echo strchr($str, "world", true) . "<br>";
echo strrchr($str, "world") . "<br>";

?>