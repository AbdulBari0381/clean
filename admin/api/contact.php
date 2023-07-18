<?php
include("../../config.php");
$sql = "SELECT * FROM cleaning.contact order by contact_id desc;";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    ?>
    <tr>
        <th>Full Name</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row['contact_name'] ?></td>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['contact_email'] ?></td>
        <td><?php echo $row['contact_phone'] ?></td>
    </tr>

<?php } } ?>