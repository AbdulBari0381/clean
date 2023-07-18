<?php

    include("../config.php");
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $massage = $_POST['massage'];

    $sql = "INSERT INTO `cleaning`.`contact` (`contact_name`, `subject`, `contact_email`, `contact_phone`, `contact_massage`)
     VALUES ('{$name}', '{$subject}', '{$email}', '{$number}', '{$massage}');";
    if (mysqli_query($con, $sql)) {
        echo 1;
    }else{
        echo 0;
    }
    mysqli_close($con);


?>