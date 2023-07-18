<?php include("nav.php"); ?>
<div class="table">
    <div class="s">
        <h2>Contacts</h2>
    </div>
    <table id="table">

    </table>
</div>
<script>
    $(document).ready(function () {
        load();
    });
    function load() {
        $.ajax({
            type: "post",
            url: "api/contact.php",
            success: function (response) {
                $("#table").html(response);
            }
        });
    }
</script>