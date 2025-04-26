<?php

$date = date_create_from_format('d-m-Y', '26-04-2026', timezone_open('Asia/Dhaka'));

echo date_format($date, 'l'); // Outputs the day name


?>