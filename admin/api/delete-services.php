<?php
include("../../config.php");
$id=$_POST['Id'];

function image($con,$id){
    $sql="SELECT image FROM cleaning.clean where clean_id={$id};";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row['image'];
} 
 $image = image($con,$id);
 $sql="DELETE FROM `cleaning`.`clean` WHERE (`clean_id` = '{$id}');";
 if(mysqli_query($con,$sql)){
    unlink("../upload/{$image}" );
 }
 mysqli_close($con);
?>