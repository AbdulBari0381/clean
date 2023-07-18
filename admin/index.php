<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="contanir-user">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" id="sub" method="post">
        <h2>Add Admin</h2>
        <input type="text" name="username" id="username" placeholder="Username">
        <input type="text" name="password" id="password" placeholder="Password">
        <input type="submit" name="submit" id="submit">
    </form>
</div>

<?php 
    include "../config.php";
    if(isset($_POST['submit'])){
        $username= mysqli_real_escape_string($con,$_POST['username']);
        $password= mysqli_real_escape_string($con,md5($_POST['password']));
        $sql="SELECT * FROM cleaning.admin where username='{$username}' and password='{$password}';";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            echo "found";
            while($row=mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION['AdminId']=$row['admin_id'];
                $_SESSION['username']=$row['username'];
                header("location:$domain/admin/services.php");
            }
        }else{
            echo "not found";
        }
    }
    ?>
</body>
</html>