<?php
if (isset($_POST['submit'])) {
    include("../../config.php");
    $rand = rand(10,999900);
    if (isset($_FILES['fileToUpload'])) {
        echo "<pre>";
        print_r($_FILES);
        $File_Name = $_FILES['fileToUpload']['name'];
        $File_Size = $_FILES['fileToUpload']['size'];
        $File_tmp = $_FILES['fileToUpload']['tmp_name'];
        $File_type = $_FILES['fileToUpload']['type'];
        $extention=str_replace("image/","",$File_type);
        $rand= $rand.".".$extention;
        move_uploaded_file($File_tmp, "../upload/" . $rand);
    }
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $icon = mysqli_real_escape_string($con, $_POST['icon']);
    $unit = mysqli_real_escape_string($con, $_POST['unit']);
    $imge= $rand;

    $sql = "INSERT INTO `cleaning`.`clean` (`services`, `price`, `unit`, `icon`, `image`) VALUES ('{$service}', '{$price}', '{$unit}', '{$icon}', '{$imge}');";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header("location:$domain/admin/services.php");
}
?>