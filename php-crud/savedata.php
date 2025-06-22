<?php

$stu_name = $_REQUEST['sname'];
$stu_address = $_REQUEST['saddress'];
$stu_class = $_REQUEST['class'];
$stu_phone = $_REQUEST['sphone'];


$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection Failed");

$sql = "INSERT INTO `students`(`sname`, `saddress`, `sclass`, `sphone`) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header('Location: http://localhost:8081/Full-Stack-Army/crud_html/');



mysqli_close($conn);
