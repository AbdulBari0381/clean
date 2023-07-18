<?php
function total_booking($con)
{
    $sql = "SELECT * FROM cleaning.booking;";
    $result = mysqli_query($con, $sql);
    $total_booking = mysqli_num_rows($result);
    return $total_booking;
}
function total_contact($con)
{
    $sql = "SELECT * FROM cleaning.contact;";
    $result = mysqli_query($con, $sql);
    $total_contact = mysqli_num_rows($result);
    return $total_contact;
}
?>