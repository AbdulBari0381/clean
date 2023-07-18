<?php
include("../../config.php");
$id=$_POST['Id'];
 $sql="DELETE FROM `cleaning`.`admin` WHERE (`admin_id` = '{$id}');";
 mysqli_query($con,$sql);
 mysqli_close($con);
?>