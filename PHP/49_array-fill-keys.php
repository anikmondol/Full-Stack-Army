<?php

$a = array('a','b','c','d','e');


// $new = array_fill_keys($a, "test");
$new = array_fill(2, 8, "test");

echo "<pre>";
print_r($new);


?>