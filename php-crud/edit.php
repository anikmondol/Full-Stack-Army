<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    // $conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection Failed");

    $sql = "SELECT * FROM `students` WHERE sid = $_REQUEST[id]";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname'] ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress'] ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <select name="sclass">
                        <?php

                        $sql1 = "SELECT * FROM `studentsclasses`;";

                        $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");

                        if (mysqli_num_rows($result1) > 0) {
                        ?>
                            <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                                <option <?php if ($row['sclass'] == $row1['cid']) {
                                            echo "selected";
                                        } ?> value="<?php echo $row1['cid'] ?>"><?php echo $row1['cname'] ?></option>
                            <?php } ?>
                        <?php } else {
                            echo '<option value="" selected disabled>No Class Found</option>';
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>

    <?php }
    } else {
        echo "<h> No Data Found </h>";
    } ?>

</div>
</div>
</body>

</html>