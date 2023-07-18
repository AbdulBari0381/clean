<?php include("nav.php") ?>

<div class="contanir" id="contanir">
    <form>
        <h3>Add Contant</h3>
        <input type="text" id="username" placeholder="User Name">
        <input type="text" id="password" placeholder="Password">
        <input type="submit" id="submit" value="submit">
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



    <script>
        $(document).ready(function () {
            load();
        });

         $("#add-services").on("click",function () { 
             $("#contanir").toggleClass("con-show");
          })

         $("#submit").on("click", function () {
             var username = $("#username").val();
             var password = $("#password").val();

             $.ajax({
                 type: "post",
                 url: "api/add-admin.php",
                 data: { username: username, password: password },
                 success: function (response) {
                     alert(response);
                     load();
                 }
             });
         })

        function load() {
            $.ajax({
                type: "post",
                url: "api/admin.php",
                success: function (data) {
                    $("#table").html(data);
                }
            });
        }

     $(document).on("click", ".delete", function () {
         var id = $(this).data("id");
         $.ajax({
             type: "post",
             url: "api/delete-admin.php",
             data: { Id: id },
             success: function (response) {
                 load();
             }
         });
     })
    </script>
</div>