<?php 
include("../../config.php");
$username =mysqli_real_escape_string($con,$_POST['username']);
$password =mysqli_real_escape_string($con,md5($_POST['password']));
$sql="SELECT * FROM cleaning.admin where username='{$username}'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    echo "This Username Alraedy taken";
}else{
    $sql1="INSERT INTO `cleaning`.`admin` (`username`, `password`) VALUES ('{$username}', '{$password}');";
    mysqli_query($con,$sql1);
    mysqli_close($con);
}


// $sql="";
// mysqli_query($con,$sql);
// mysqli_close($con);

?>