<?php include "header.php"; ?>

<?php include "config.php";
$sql = "SELECT * FROM cleaning.clean;";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="table">
        <table>
            <tr>
                <th>General Cleaning Service</th>
                <th>Pricing</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td>
                        <?php echo $row['services'] ?>
                    </td>
                    <td>
                        <?php echo $row['price'] ?>/
                        <?php echo $row['unit'] ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
<?php } ?>