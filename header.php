<!DOCTYPE html>
<html lang="en">
<?php include("config.php"); ?>

<head>
    <base href="/cleaning/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/confirm.css">
    <script src="jquery.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="con-nav" id="con-nav">
        <div class="nav">
            <div class="logo">
                <!-- <img src="" alt=""> -->
                <p>Exo Cleaner</p>
            </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="navbar" id="navbar">
                <a href="<?php echo $domain ?>" class="n" onclick="bari()">Home</a>
                <a href="pricing" class="n" onclick="bari()">Pricing</a>
                <a href="services" class="n" onclick="bari()">Services</a>
                <a href="blog" class="n" onclick="bari()">Blogs</a>
                <a href="contact" class="n" onclick="bari()"><button> Contact</button></a>
            </div>

        </div>
    </div>
    <nav>
        <div class="social">
            <a href="tel:+923181529255" class="fa-solid fa-phone"> </a>
            <a href="https://api.whatsapp.com/send?phone=923181529255" target="_blank" class="fa-brands fa-whatsapp"></a>
        </div>
        <div class="tel">
           Call +92 181529255
        </div>
        <div class="social">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </nav>

    <!-- <section class="call-buton">
        <a class="cc-calto-action-ripple" href="tel:03181529255"><i class="fa fa-phone"></i><span
                class="num">03181529255</span>
        </a>
    </section> -->

    <!-- <div class="popup" id="popup">
        <div class="pop">
            <div class="icon">
                <i class="fa-solid fa-check"></i>
            </div>
            <p>SusscessFully Sent</p>
            <div class="cross" id="popup-cross">×</div>
        </div>
    </div> -->

    <script>

        let burger = document.querySelector(".burger")
        burger.addEventListener('click', () => {
            let navbar = document.getElementById("navbar")
            navbar.classList.toggle("res-nav")
        })

        function bari() {
            let navbar = document.getElementById("navbar")
            navbar.classList.remove("res-nav")
        }
    </script>
    <script src="https://kit.fontawesome.com/38fcf854b7.js" crossorigin="anonymous"></script>
</body>

</html>