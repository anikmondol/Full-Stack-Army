<?php

$color = ["red", "green", "blue", "yellow", "brow"];

$fruit = ['orange','apple'];


array_splice($color, 0, 0, $fruit);

echo "<pre>";
print_r($color);

?>