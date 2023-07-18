<style>

</style>

<?php include "header.php"; ?>

<!-- ------------------------------------------------------------landing-page---- -->
<div class="con-landing">
    <div class="landing-page">
        <h1>Welcome to Professinal <br>
            <span> Exo Cleaner </span>
        </h1>
        <p>Cleaning plays a vital role in preventing the spread of diseases and infections by eliminating
            germs and bacteria from surfaces. It also helps to maintain the longevity and functionality
            of objects and spaces by removing dirt, grime, and debris.</p>
        <a href="contact"><button>Contact</button></a>
    </div>
    <div class="img">
        <img src="img/pngwing.com.png" alt="">
    </div>
</div>
<!-- -------------------------------------------services-------------- -->
<div class="s">
    <h1>Services</h1>
</div>
<?php
include "config.php";
$sql = "SELECT * FROM cleaning.clean;";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {

    ?>
    <div class="con-services">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="services/single/<?php echo $row['slug'] ?>">
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
        <a href="">
            <div class="services" id="custom-services">
                <div class="icon">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <h4>Add Custom Services</h4>
                <p>-</p>
            </div>
        </a>
    </div>
<?php } ?>

<!-- -------------------------------------------------------care-------------------- -->
<div class="con-care">
    <div class="img">
        <img src="img/pexels-andrea-piacquadio-3768910.jpg" alt="">
    </div>
    <div class="contant">
        <h1>We Care About Your Durty Home</h1>
        <p>Cleaning plays a vital role in preventing the spread of diseases and infections by eliminating germs and
            bacteria from surfaces. It also helps to maintain the longevity and functionality of objects and spaces by
            removing dirt, grime, and debris.</p>
        <div class="logo">
            <!-- <img src="img/1.png" alt="">
                <img src="img/2.png" alt="">
                <img src="img/3.png" alt=""> -->
        </div>
        <a href="services"><button>Explore Services</button></a>
    </div>
</div>
<!-- ---------------------------------------------------------------------services-point------------ -->
<div class="con-s-p">
    <div class="item">
        <div class="items">
            <i class="fa-solid fa-people-arrows"></i>
            <p>Satisfied Coustomer</p>
            <h3>1,240+</h3>
        </div>
        <div class="items">
            <i class="fa-brands fa-servicestack"></i>
            <p>Our Services</p>
            <h3>600+</h3>
        </div>
        <div class="items">
            <i class="fa-solid fa-user-doctor"></i>
            <p>Our Emploies</p>
            <h3>240+</h3>
        </div>
        <div class="items">
            <i class="fa-solid fa-location-dot"></i>
            <p>Service Points</p>
            <h3>40+</h3>

        </div>
    </div>
</div>
<!-- ---------------------------------------blog------------ -->
<!-- <div class="s">
    <h1>Blogs</h1>
</div>
<br>
<div class="blog-container">
<div class="card">
        <div class="card-header">
            <div class="img">
                <img src="img/pexels-andrea-piacquadio-3768910.jpg" alt="">
            </div>
        </div>
        <div class="card-body">
            <h4>How to Create gig on fiverr step by step explane</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, quam? Facere dolor quos quisquam, commodi
                unde autem mollitia! Aut enim quis quia quas in, pariatur, reiciendis autem natus nihil, nostrum
                voluptate veniam ad atque dolores harum placeat commodi asperiores cum optio repellendus possimus? Autem
                debitis quidem eveniet obcaecati fugiat ad! </p>
                <button>Read More</button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="img">
                <img src="img/pexels-andrea-piacquadio-3768910.jpg" alt="">
            </div>
        </div>
        <div class="card-body">
            <h4>How to Create gig on fiverr step by step explane</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, quam? Facere dolor quos quisquam, commodi
                unde autem mollitia! Aut enim quis quia quas in, pariatur, reiciendis autem natus nihil, nostrum
                voluptate veniam ad atque dolores harum placeat commodi asperiores cum optio repellendus possimus? Autem
                debitis quidem eveniet obcaecati fugiat ad! </p>
                <button>Read More</button>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="img">
                <img src="img/pngwing.com.png" alt="">
            </div>
        </div>
        <div class="card-body">
            <h4>How to Create gig on fiverr step by step explane</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, quam? Facere dolor quos quisquam, commodi
                unde autem mollitia! Aut enim quis quia quas in, pariatur, reiciendis autem natus nihil, nostrum
                voluptate veniam ad atque dolores harum placeat commodi asperiores cum optio repellendus possimus? Autem
                debitis quidem eveniet obcaecati fugiat ad! </p>
                <button>Read More</button>
        </div>
    </div>

</div>
<br>
<div class="s"><button>View All</button> </div>
<br>
 -->
<?php include("footer.php")  ?>