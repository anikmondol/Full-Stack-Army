<?php

date_default_timezone_set("Asia/Dhaka");

echo "Time & date : " . date("d-m-Y h:i:sa") . "<br><br>";

echo date("l", mktime(0,0,0,10, 15, 2000)) . "<br>";

echo date("l", gmmktime(0,0,0,10, 15, 2000));


?>