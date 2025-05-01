<?php

$food = array('orange', "banana", "apple", "grapes");


echo "<b>Current : </b>" . current($food) . "<br>";
echo "<b>Key : </b>". key($food) . "<br>";
echo "<b>Pos : </b>". pos($food) . "<br>";

next($food);
echo "<b>Current : </b>" . current($food) . "<br>";

next($food);
echo "<b>Current : </b>" . current($food) . "<br>";

prev($food);
echo "<b>Current : </b>" . current($food) . "<br>";

end($food);
echo "<b>Current : </b>" . current($food) . "<br>";

echo "<b>Key : </b>". key($food) . "<br>";


reset($food);
echo "<b>Current : </b>" . current($food) . "<br>";

?>