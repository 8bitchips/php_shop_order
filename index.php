<?php
include "./config/connect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <title>Shop Order</title>
</head>

<body>
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <!-- Header Logo Start -->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="header-logo">
                            <a href="/index.php"><img src="/assets/images/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li id="nav-home"><a href="#home">Trang Chủ</a></li>
                                <li id="nav-about"><a href="#about">Giới Thiệu</a></li>
                                <li id="nav-shop"><a href="#shop">Shop</a></li>
                                <li id="nav-contact"><a href="#contact">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-lg-4 col-md-8 col-6">
                        <div class="header-actions">
                            <?php include "./frontend/search.php" ?>
                            <!-- account login -->
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo "<a href='#account' id='account' class='header-action-btn header-action-btn-wishlist'>
                                    <i class='icon-user icons'></i> " . $_SESSION['user'] . "</a>";
                            } else {
                                echo "<a href='#login' id='login' class='header-action-btn header-action-btn-wishlist'><i class='icon-user icons'></i> Login</a>";
                            }
                            ?>
                            <?php include "./frontend/cart.php" ?>
                            <!-- Scroll Top Start -->
                            <a href="#" class="scroll-top show rounded" id="scroll-top">
                                <i class="arrow-top ti-angle-double-up"></i>
                                <i class="arrow-bottom ti-angle-double-up"></i>
                            </a>
                            <!-- Scroll Top End -->
                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
                                <i class="icon-menu"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        
    </div>
    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-name-bright section-padding">
            <div class="container">
                <div class="row m-b-n40">
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">About Us</h1>
                            <p class="desc-content">Lorem ipsum dolor sit amet, co adipisi elit, sed eiusmod tempor incididunt ut labore et dolore</p>
                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start m-b-n10">
                                <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Useful Links</h2>
                            <ul class="widget-list">
                                <li><a href="wishlist.html">Help & Contact Us</a></li>
                                <li><a href="contact.html">Returns & Refunds</a></li>
                                <li><a href="contact.html">Online Stores</a></li>
                                <li><a href="contact.html">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Help</h2>
                            <ul class="widget-list">
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="contact.html">Pricing Plans</a></li>
                                <li><a href="contact.html">Order Traking</a></li>
                                <li><a href="contact.html">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 m-b-40">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Quick Menu</h2>
                            <ul class="widget-list">
                                <li><a href="/login.php">Login</a></li>
                                <li><a href="/my-account.php">My-Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="/checkout.php">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-name-light p-t-20 p-b-20">
            <div class="container">
                <div class="row align-items-center m-b-n20">
                    <div class="col-md-6 text-center text-md-start order-2 order-md-1 m-b-20">
                        <div class="copyright-content">
                            <p class="mb-0">© 2021 <strong>Amber </strong> Made with <i class="fa fa-heart text-danger"></i> by <a href="#">HasThemes.</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end order-1 order-md-2 m-b-20">
                        <div class="payment">
                            <a href="#/">
                                <img src="assets/images/payment/payment_large.png" alt="Payment">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->
    <?php include "./modal.php"?>
    
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/js/plugins.min.js"></script>

    <!--Main JS-->
    <script src="/assets/js/main.js"></script>


</body>

</html>