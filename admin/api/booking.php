<?php
include("../../config.php");
$sql = "SELECT * FROM cleaning.booking order by book_id desc;";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    ?>
    <tr>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Service</th>
        <th>Massage</th>
    </tr>
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['services'] ?></td>
        <td><?php echo $row['massage'] ?></td>
    </tr>

<?php } } ?>