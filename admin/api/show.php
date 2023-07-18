
    <?php
    include("../../config.php");
    $sql = "SELECT * FROM cleaning.clean;";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        ?>
            <tr>
                <th>General Cleaning Service</th>
                <th>Pricing</th>
                <th>Icon</th>
                <th>Unit</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td>
                        <?php echo $row['services'] ?>
                    </td>
                    <td>
                        <?php echo $row['price'] ?>
                    </td>
                    <td>
                        <?php echo $row['icon'] ?>
                    </td>
                    <td>
                        <?php echo $row['unit'] ?>
                    </td>
                    <td><a href="service-update.php?id=<?php echo $row['clean_id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><i data-id="<?php echo $row['clean_id'] ?>" class="delete fa-solid fa-trash"></i></td>
                </tr>
            <?php } ?>
        <?php } ?>
