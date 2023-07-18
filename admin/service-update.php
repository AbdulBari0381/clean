<?php include("nav.php") ?>


<?php
include("../config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM cleaning.clean where clean_id={$id};";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="contanir con-show">
    <form action="api/service-update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <h3>Add Contant</h3>
        <input type="text" name="service" value="<?php echo $row['services'] ?>" placeholder="Services Name">
        <input type="number" name="price" value="<?php echo $row['price'] ?>" placeholder="Price">
        <p>
            <?php echo "{$row['icon']}" ?>
        </p>
        <input type="text" name="unit" value="<?php echo $row['unit'] ?>" placeholder="Unit">
        <input type="file" value="<?php echo $row['image'] ?>" name="fileToUpload" >
        <input type="submit" name="submit" name="image" id="submit" value="submit">
    </form>
    <img style="width:100px;" src=upload/<?php echo $row['image'] ?> alt="">
</div>