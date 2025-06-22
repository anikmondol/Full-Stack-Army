<?php

$sid = $_REQUEST['id'];


$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection Failed");


$sql = "DELETE FROM `students` WHERE sid = $sid";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header('Location: http://localhost:8081/Full-Stack-Army/crud_html/');



mysqli_close($conn);
