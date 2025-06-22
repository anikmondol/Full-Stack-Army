<?php include 'header.php'; ?>

<?php

if (isset($_POST['deletebtn'])) {

    // $conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection Failed");

    $sql = "SELECT * FROM `students` WHERE sid = $_REQUEST[sid]";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {

        $sql = "DELETE FROM `students` WHERE sid = $_REQUEST[sid]";

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        header('Location: http://localhost:8081/Full-Stack-Army/crud_html/');

        mysqli_close($conn);
    }
}
?>



<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>