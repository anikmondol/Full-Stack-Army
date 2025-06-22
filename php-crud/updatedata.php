<?php


$sid = $_REQUEST['sid'];
$stu_name = $_REQUEST['sname'];
$stu_address = $_REQUEST['saddress'];
$stu_class = $_REQUEST['sclass'];
$stu_phone = $_REQUEST['sphone'];


$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection Failed");

$sql = "UPDATE `students` SET `sname`='$stu_name',`saddress`='$stu_address',`sclass`='$stu_class',`sphone`='$stu_phone' WHERE sid = $sid";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header('Location: http://localhost:8081/Full-Stack-Army/crud_html/');



mysqli_close($conn);
