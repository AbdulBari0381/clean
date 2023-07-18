<?php
include "../config.php";
require("funtions.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("location:$domain/admin");
}?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery.js"></script>
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="logo"><a href="">Hi,
                <?php
                echo $_SESSION['username']; ?>
            </a></div>
        <div class="logout"><a href="api/logout.php">Logout</a></div>
    </nav>

    <div class="navbar">
        <a href="services.php">Services</a>
        <a href="admin.php">Admin</a>
        <a href="booking.php" class="order">
            <div class="book">
                <?php echo total_booking($con) ?>
            </div> Booking
        </a>
        <a href="contact.php" class="contact">
            <div class="total-contact">
                <?php echo total_contact($con) ?>
            </div> Contact
        </a>
    </div>


    <script src="https://kit.fontawesome.com/38fcf854b7.js" crossorigin="anonymous"></script>