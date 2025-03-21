<?php
include '../config.php';
session_start();
$user_id =  $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:../home/home.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:../home/home.php');
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unravel. | My Profile</title>

    <!-- favicon link -->
    <link rel="icon" type="image/x-icon" href="../imgs/icons/fav/3.ico">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css-->
    <link rel="stylesheet" href="../style.css">
</head>

<body class="profile">

    <!-- header -->

    <section class="header">

        <a href="../home/home.php" class="logo">Unravel.</a>
        <nav class="navbar">
            <a href="../home/home.php">home</a>
            <a href="../about/about.php">about</a>
            <a href="../archive/package.php">archive</a>
            <a href="../products/book.php">products</a>
            <a style="color:blueviolet; pointer-events: none;">Profile</a>
            <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are you sure you want to log out?')">exit</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>


    </section>

    <!-- message -->

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>

    <!-- profile -->

    <div class="container">
        <?php
        $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
        if (mysqli_num_rows($select_user) > 0) {
            $fetch_user = mysqli_fetch_assoc($select_user);
        };
        ?>

        <h1>Welcome, <span><?php echo $fetch_user['name']; ?></span></h1>

        <div class="user-profile">
            <h2>Profile</h2>

            <p> username : <span><?php echo $fetch_user['name']; ?></span> </p>

            <div class="flex">

                <div>
                    <h3>Contact information</h3>
                    <p class="box"> email : <span><?php echo $fetch_user['email']; ?></span> </p>
                    <p class="box">phone : <span><?php echo $fetch_user['phone']; ?></span> </p>
                </div>

                <div>
                    <h3>Shipping information</h3>
                    <p class="box">address : <span><?php echo $fetch_user['address']; ?></span> </p>
                    <p class="box">city : <span><?php echo $fetch_user['city']; ?></span></p>
                    <p class="box">state : <span><?php echo $fetch_user['state']; ?></span> </p>
                    <p class="box">Country : <span><?php echo $fetch_user['country']; ?></span> </p>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="../home/home.php"> <i class="fas fa-angle-rig"></i>home</a>
                <a href="../about/about.php"> <i class="fas fa-angle-rig"></i>about</a>
                <a href="../archive/package.php"> <i class="fas fa-angle-rig"></i>archive</a>
                <a href="../products/book.php"> <i class="fas fa-angle-rig"></i>products</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="contact.php"> <i class="fas fa-angle-right"></i>contact us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> contact@unravel.com</a>
                <a href="#"> <i class="fas fa-map"></i> Envigado, Colombia - 050020 </a>
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
            <p>© 2023 <span>Unravel.</span> / All rights reserved</p>
        </div>
    </section>


    <!-- custom js file link -->
    <script src="../js/script.js"></script>

</body>

</html>