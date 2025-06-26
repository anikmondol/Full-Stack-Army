<?php


include "config.php";


$id = $_REQUEST['id'];

$sql = "DELETE FROM `category` WHERE category_id = $id";
$result = mysqli_query($conn, $sql) or die("Query Failed");

if ($result) {
    header("Location: http://localhost:8081/Full-Stack-Army/News-Project/admin/category.php");
    exit();
};
