<?php

include '../config.php';

session_start();
$user_id =  $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:archive.php');
}

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:archive.php');
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | Archive</title>

    <!-- favicon link -->
    <link rel="icon" type="image/x-icon" href="../imgs/icons/fav/7.ico">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css-->
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- header -->

    <section class="header">

        <a href="../home/home.php" class="logo">Unravel.</a>
        <nav class="navbar">
            <a href="../home/home.php">home</a>
            <a href="../about/about.php">about</a>
            <a style="color:blueviolet; pointer-events: none;">archive</a>
            <a href="../products/book.php">products</a>
            <a href="../user/index.php">Profile</a>
            <a href="package.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are you sure you want to log out?')">exit</a>
        </nav>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>


    <!-- archive -->

    <div class="heading" style="background: url(../imgs/bg/<?php echo (rand(3, 13)); ?>.png) no-repeat;">
        <h1>Archive</h1>
    </div>


    <section class="archive">

        <h1 class="heading-title"> articles & studies </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../imgs/micr.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Introduction to Microdosing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/labs.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Studies on Psilocibin</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/meditation.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Meditation Vault</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/mushrms.jpg" alt="">
                </div>
                <div class="content">
                    <h3>mushrooms & fungi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/growing-mushrooms-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mushroom cultivation guide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../imgs/doses.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Microdosing guide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo.</p>
                    <a href="" class="btn">Read</a>
                </div>
            </div>
        </div>

        <div class="load-more"><span class="btn">load more</span></div>

    </section>


    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="../home/home.php"> <i class="fas fa-angle-rig"></i>home</a>
                <a href="../about/about.php"> <i class="fas fa-angle-rig"></i>about</a>
                <a href="package.php"> <i class="fas fa-angle-rig"></i>archive</a>
                <a href="../products/book.php"> <i class="fas fa-angle-rig"></i>products</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>contact us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> contact@unravel.com</a>
                <a href="#"> <i class="fas fa-map"></i> Medellín, Colombia</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                <a href="#"> <i class="fab fa-youtube"></i>youtube</a>
            </div>

        </div>

        <div class="credit">
        <p>© 2023 <span>Unravel.</span> | All rights reserved </p>
        </div>
    </section>


    <!-- swiper js link -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- custom js file link -->

    <script src="../js/script.js"></script>

</body>

</html>