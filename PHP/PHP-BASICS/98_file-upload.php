<?php

if (isset($_FILES['image'])) {
   
    // echo "<pre>";
    // print_r($_FILES);

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];


    if (move_uploaded_file($file_tmp, "folder-structure/image/". $file_name)) {
        echo "file upload successful";
    } else {
        echo "file upload Failed";
    }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" id="" >
    <br>
    <br>
    <input type="submit" value="submit">
</form>

</body>
</html>