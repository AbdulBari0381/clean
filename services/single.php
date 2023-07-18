<?php include "../header.php"; ?>

<!-- <?php
echo "<pre>";
print_r($_SERVER) ?> -->

<div class="con-service">
    <?php include "../config.php";
    $slug = $_SERVER['PATH_INFO'];
    $slug=str_replace("/single/","",$slug);
    $sql1 = "SELECT * FROM cleaning.clean where slug='{$slug}';";
    $result1 = mysqli_query($con, $sql1);
    if(mysqli_num_rows($result1)>0){
    $row1 = mysqli_fetch_assoc($result1);

    ?>
    <div class="img">
        <img src="admin/upload/<?php echo $row1['image'] ?>" alt="">
    </div>
    <div class="contant">
        <small>Services</small>
        <h1>
            <?php echo $row1['services'] ?>
        </h1>
        <p> Save Rs.
            <?php echo $row1['price'] * 0.10 ?> /
            <?php echo $row1['unit'] ?>
        </p>
        <h3>Rs.
            <?php echo $row1['price'] ?>/
            <?php echo $row1['unit'] ?>
        </h3>
        <p class="text">Our professional cleaning services guarantee a spotless and fresh environment. Leave the
            hard work to us and enjoy a sparkling clean space. Contact us for exceptional cleaning results.</p>
        <div class="btn">
            <button id="book-online">Book Now</button>
            <button>Calculate Price</button>
        </div>
    </div>
    <?php }else{
        Echo "No Such Services Found";
    } ?>
</div>























<!-- ----------------------------------more service -->
<div class="s">
    <h1>Services</h1>
</div>

<?php
$sql = "SELECT * FROM cleaning.clean;";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {

    ?>
    <div class="con-services">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="services.php?Id=<?php echo $row['clean_id'] ?>">
                <div class="services">
                    <div class="icon">
                        <?php echo $row['icon'] ?>
                    </div>

                    <h4>
                        <?php echo $row['services'] ?>
                    </h4>
                    <p>
                        <?php echo $row['price'] ?>/
                        <?php echo $row['unit'] ?>
                    </p>
                </div>
            </a>
        <?php } ?>
    </div>
<?php } ?>

<!-- ---------------------------------Book Oline -->
<div class="book-online" id="con-online">
    <div class="cross">×</div>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <h2>Book Online</h2>
        <input type="text" name="name" placeholder="Enter Your Full Name   (Required)" required>
        <input type="number" name="phone" placeholder="Enter Your Phone Number   (Required)" required>
        <input type="Email" name="email" placeholder="Enter Your Phone Email   (Required)" required>
        <input type="text" name="service" value="<?php echo $row1['services'] ?>"
            placeholder="Enter Service Name   (Required)" required>
        <input type="text" name="Massage" placeholder="Enter Your Massage   (Optional)">
        <input type="submit" name="submit" id="submit" value="Submit">

    </form>
</div>


<?php
if (isset($_POST['submit'])) {
    include("header.php");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $Massage = mysqli_real_escape_string($con, $_POST['Massage']);
    $book_sql = "INSERT INTO `cleaning`.`booking` (`name`, `phone`, `email`, `services`, `massage`) VALUES ('{$name}', '{$phone}', '{$email}', '{$service}', '{$Massage}');";
    if (mysqli_query($con, $book_sql)) {
        ?>
        <div class="popup" id="popup">
            <div class="pop">
                <div class="icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p>SusscessFully Sent</p>
                <div class="cross" id="popup-cross">×</div>
            </div>
        </div>
        <?php
    }
    mysqli_close($con);
}
include("../footer.php");
?>