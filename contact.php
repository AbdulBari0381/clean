<?php include "header.php"; ?>
<div class="contanir">
    <form id="sub" method="post">
    <h2>Conatact Form</h2>

        <input type="text" id="name" placeholder="Full Name   (Required)">
        <input type="text" id="subject" placeholder="Subject   (Required)">
        <input type="Email" id="email" placeholder="Email   (Required)">
        <input type="number" id="number" placeholder="Phone Number   (Required)">
        <input type="text" id="massage" placeholder="Massage   (Required)">
        <input type="submit" id="submit" id="submit">
    </form>
</div>

<script>
    $("#contactsubmit").on("click", function () {
        var name = $("#name").val();
        var subject = $("#subject").val();
        var email = $("#email").val();
        var number = $("#number").val();
        var massage = $("#massage").val();

        $.ajax({
            type: "post",
            url: "api/contact.php",
            data: { name: name, subject: subject, email: email, number: number, massage: massage },
            success: function (response) {
                console.log(response)
            }
        });
    })
</script>

<?php include("footer.php") ?>