
<?php
    include("../../config.php");
    $sql = "SELECT * FROM cleaning.admin order by admin_id desc;";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        ?>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <?php if(mysqli_num_rows($result) > 1){ ?>
                <th>Delete</th>
                <?php } ?>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td>
                        <?php echo $row['username'] ?>
                    </td>
                    <td>
                        <?php echo $row['password'] ?>
                    </td>
                    <?php if(mysqli_num_rows($result) > 1){ ?>
                    <td><i data-id="<?php echo $row['admin_id'] ?>" class="delete fa-solid fa-trash"></i></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        <?php } ?>
