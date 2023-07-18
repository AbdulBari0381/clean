<?php include("../header.php") ?>
<div class="s" style="padding:50px 0px 30px 0px">
    <h1>Services</h1>
</div>
<?php
include "../config.php";
$sql = "SELECT * FROM cleaning.clean;";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {

    ?>
    <div class="con-services">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="services/<?php echo $row['slug'] ?>">
                <div class="services">
                    <div class="icon">
                        <?php echo $row['icon'] ?>
                    </div>

                    <h4>
                        <?php echo $row['services'] ?>
                    </h4>
                    <p>
                        <?php echo $row['price'] ?>/
                        <?php echo $row['unit'] ?>
                    </p>
                </div>
            </a>
        <?php } ?>
        <a href="">
            <div class="services" id="custom-services">
                <div class="icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <h4>Add Custom Services</h4>
                <p>-</p>
            </div>
        </a>
    </div>
<?php } ?>
<?php include("../footer.php") ?>