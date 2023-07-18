<?php include("nav.php"); ?>
<div class="table">
    <div class="s">
        <h2>Booking</h2>
    </div>
    <table id="table">

    </table>
</div>

<script>
    $(document).ready(function () {
        load();
    });
    function load(){
        $.ajax({
            type: "post",
            url: "api/booking.php",
            success: function (response) {
                $("#table").html(response);
            }
        });
    }
</script>