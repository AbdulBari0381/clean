<?php include("nav.php"); ?>

<div class="contanir" id="contanir">
    <form action="api/add-services.php" method="post" enctype="multipart/form-data">
        <h3>Add Contant</h3>
        <input type="text" name="service" placeholder="Services Name">
        <input type="number" name="price" placeholder="Price">
        <input type="text" name="icon" placeholder="Icon">
        <input type="text" name="unit" placeholder="Unit">
        <input type="file" name="fileToUpload" required>
        <input type="submit" name="submit" name="image" id="submit" value="submit">
    </form>
</div>


<div class="table">
    <div class="s">
        <h2>All Services</h2>
        <button id="add-services">Add Services</button>
    </div>
    <table id="table">
        <!-- Data Shown In This Div -->
    </table>
</div>

<script>
    $(document).ready(function () {
        load();
    });

    $("#add-services").on("click",function () { 
        $("#contanir").toggleClass("con-show");
     })



    function load() {
        $.ajax({
            type: "post",
            url: "api/show.php",
            success: function (data) {
                $("#table").html(data);
            }
        });
    }

    $(document).on("click", ".delete", function () {
        var id = $(this).data("id");
        $.ajax({
            type: "post",
            url: "api/delete-services.php",
            data: { Id: id },
            success: function (response) {
                load();
            }
        });
    })



</script>