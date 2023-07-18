<?php
include("../../config.php");


$service= mysqli_real_escape_string($con,$_POST['service']);
$price= mysqli_real_escape_string($con,$_POST['price']);
$icon= mysqli_real_escape_string($con,$_POST['icon']);
$unit= mysqli_real_escape_string($con,$_POST['unit']);

$sql="INSERT INTO `cleaning`.`clean` (`services`, `price`, `unit`, `icon`) VALUES ('{$service}', '{$price}', '{$unit}', '{$icon}');";
mysqli_query($con,$sql);
mysqli_close($con);
header("location:{$domain}admin");


?>