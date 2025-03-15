<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Shahid Real Estate</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="./assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="./assets/css/flaticon.css" rel="stylesheet">
    <link href="./assets/css/owl.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="./assets/css/animate.css" rel="stylesheet">
    <link href="./assets/css/jquery-ui.css" rel="stylesheet">
    <link href="./assets/css/nice-select.css" rel="stylesheet">
    <link href="./assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link href="./assets/css/switcher-style.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/responsive.css" rel="stylesheet">


    <!-- razorpay payment integration -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let buttons = document.querySelectorAll(".razorpay-btn");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                let amount = this.getAttribute("data-amount");
                let plan = this.getAttribute("data-plan");

                var options = {
                    "key": "rzp_test_kjkJVOwg4zthTS", 
                    "amount": amount * 100, 
                    "currency": "INR",
                    "name": "Real Estate",
                    "description": plan + " Subscription",
                    "handler": function (response) {
                        // Call the backend to save payment details
                        fetch("../payment_success.php", {
                            method: "POST",
                            headers: { "Content-Type": "application/json" },
                            body: JSON.stringify({
                                payment_id: response.razorpay_payment_id,
                                amount: amount,
                                plan: plan,
                                username: "sridhar" 
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            alert("Payment Successful! Transaction ID: " + response.razorpay_payment_id);
                            location.reload();
                        });
                    },
                    "theme": { "color": "#F37254" }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            });
        });
    });
</script>


</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end switcher menu -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>Discover St, New York, NY 10012, USA</li>
                            <li><i class="far fa-clock"></i>Mon - Sat 9.00 - 18.00</li>
                            <li><i class="far fa-phone"></i><a href="tel:2512353256">+251-235-3256</a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="index.php"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.php"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                        <?php



                        if (isset($_SESSION['user_id'])) {
                            // Fetch user details from the session
                            $user_name = $_SESSION['name'];
                            $user_img = $_SESSION['user_img'];
                            ?>
                            <div class="sign-box">
                                <a href="profile.php">
                                    <img src="assets/images/users/<?php echo $user_img; ?>" alt="User Image"
                                        style="width:40px; height:40px; border-radius:50%;">
                                    <?php echo $user_name; ?>
                                </a>
                                <a href="./logout.php" class="logout-btn" style="color:red; margin-left:10px;">Logout</a>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="sign-box">
                                <a href="signin.php"><i class="fas fa-user"></i> Sign In</a>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="index.php"><span>Home</span></a>

                                        </li>

                                        <li class=""><a href="property-list.php"><span>Property</span></a>

                                        </li>

                                        <li class=""><a href="agency-list.php"><span>Agency</span></a>

                                        </li>
                                        <li class=""><a href="blog.php"><span>Blog</span></a>

                                        </li>
                                        <li><a href="contact.php"><span>Contact</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.php" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.php" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67ce72772dc557190e95c996/1ilv6u95h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->




        <!-- for inspect block securtiy reasons -->
        <!-- <script>
            document.addEventListener('contextmenu', function (event) {
                event.preventDefault();
            });

            document.addEventListener("keydown", function (event) {
                if (event.key === "F12" ||
                    (event.ctrlKey && event.shiftKey && (event.key === "I" || event.key === "J")) ||
                    (event.ctrlKey && event.key === "U")) {
                    event.preventDefault();
                }
            });
        </script>


        <style>
            body {
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
            }
        </style> -->