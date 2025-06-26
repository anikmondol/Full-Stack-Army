<?php include "header.php";

include "config.php";

if (isset($_REQUEST['submit'])) {


    $id = mysqli_real_escape_string($conn, $_REQUEST['user_id']);

    $f_name = mysqli_real_escape_string($conn, $_REQUEST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_REQUEST['l_name']);
    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $role = mysqli_real_escape_string($conn, $_REQUEST['role']);

    $sql1 = "SELECT * FROM `user` WHERE user_id = $id";
    $result = mysqli_query($conn, $sql1) or die("Query Failed");

    if (mysqli_num_rows($result) > 0) {

        $updateSql = "UPDATE `user` SET `first_name`='$f_name',`last_name`='$l_name',`username`='$username',`role`='$role' WHERE user_id = $id";

        if (mysqli_query($conn, $updateSql)) {
            header("Location: http://localhost:8081/Full-Stack-Army/News-Project/admin/users.php");
        }
    }
}




?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->

                <?php


                $id = $_REQUEST['id'];

                $sql = "SELECT * FROM `user` WHERE user_id = $id";
                $result = mysqli_query($conn, $sql) or die("Query Failed");


                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['user_id'] ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'] ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role">
                                    <?php
                                    if ($row['role'] == 1) {
                                        echo '<option value="1" selected>Admin</option>';
                                        echo '<option value="0">Normal User</option>';
                                    } else {
                                        echo '<option value="1">Admin</option>';
                                        echo '<option value="0" selected>Normal User</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                        </form>

                <?php }
                } else {
                    echo "No Data Get";
                }
                ?>

                <!-- /Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";
mysqli_close($conn);  ?>