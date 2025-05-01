<?php

// echo date("d-m-Y",strtotime("now")) . "<br>";
// echo date("d-m-Y",strtotime("3 march 2005")) . "<br>";
// echo date("d-m-Y H:i:s",strtotime("+5 hours")) . "<br>";
// echo date("d-m-Y H:m",strtotime("+1 week 3 days 7 hours 5 seconds")) . "<br>";
// echo date("d-m-Y H:m",strtotime("next monday")) . "<br>";
// echo date("d-m-Y H:m",strtotime("last sunday")) . "<br>";
// echo date("d-m-Y H:m",strtotime("First day of last month")) . "<br>";

echo strftime("%B %d %Y %X %Z") . "<br>";

echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";

echo gmstrftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";

?>