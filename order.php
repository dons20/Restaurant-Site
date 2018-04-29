<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resturant Website</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="./">Asia's Cafe</a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./#examples">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./#contact">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Links -->

                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/asiascafehalfwaytree/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/asias_cafe/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item" style="display: none;">
                            <a id="login" href="#loginForm" class="nav-link" data-toggle="modal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="javascript:void(0);">|</a>
                        </li>
                        <li class="nav-item" style="display: none;">
                            <a id="reg" href="#registrationForm" class="nav-link" data-toggle="modal">Register</a>
                        </li>
                        <li class="nav-item">
                            <a id="uname" href="javascript:void(0)" class="nav-link" data-toggle="modal">Username</a>
                        </li>
                        <li class="nav-item active">
                            <a id="order" href="order.php" class="nav-link disabled">Place Order</a>
                        </li>
                        <li class="nav-item">
                            <a id="logout" href="/php/logout.php" class="nav-link">Logout</a>
                        </li>
                    </ul>

                </div>
                <!-- Collapsible content -->

            </div>
        </nav>
        <!--/.Navbar-->

        <!--Mask-->

        <!--Mask-->
        <div id="intro" class="view lazy">
            <div id="introBG" class="lazy"></div>
            <div class="full-bg-img">

                <div class="mask rgba-black-strong">

                    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-md-10">

                                <!-- Nav tabs -->
                                <div class="tabs-wrapper">
                                    <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link waves-light tabBtn active" data-toggle="tab" href="#menuPanelA" role="tab">Breakfast</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link waves-light tabBtn" data-toggle="tab" href="#menuPanelB" role="tab">Lunch</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link waves-light tabBtn" data-toggle="tab" href="#menuPanelC" role="tab">Dessert</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link waves-light tabBtn" data-toggle="tab" href="#menuPanelD" role="tab">Beverages</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab panels -->
                                <div id="tabcontent" class="tab-content card">

                                    <!--Panel 1-->
                                    <div class="tab-pane fade in show active" id="menuPanelA" role="tabpanel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                            soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam,
                                            pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

                                    </div>
                                    <!--/.Panel 1-->

                                    <!--Panel 2-->
                                    <div class="tab-pane fade" id="menuPanelB" role="tabpanel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                            soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam,
                                            pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                            soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam,
                                            pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

                                    </div>
                                    <!--/.Panel 2-->

                                    <!--Panel 3-->
                                    <div class="tab-pane fade" id="menuPanelC" role="tabpanel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                            soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam,
                                            pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

                                    </div>
                                    <!--/.Panel 3-->

                                    <!--Panel 4-->
                                    <div class="tab-pane fade" id="menuPanelD" role="tabpanel">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima,
                                            soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam,
                                            pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

                                    </div>
                                    <!--/.Panel 4-->

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer unique-color-dark pt-0">


        <!-- Social buttons -->
        <div class="primary-color">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic">
                            <i class="fab fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        <!--Footer Links-->

        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Asia's Cafe</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="far fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            &copy; 2018 Copyright: <a href="javascript:void(0);"> Group #1 VTDI</a><br>
            <a href="https://www.vecteezy.com">Free Vectors by Vecteezy!</a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Bootstrap tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Lazy Load Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.5.2/lazyload.min.js"></script>
    <!-- User Scripts -->
    <script src="js/scripts.js"></script>
    <?php
        if (isset($_SESSION["first_name"])) {
            echo '<script type="text/javascript">',
                    "\r\t" . '$("#uname").text("Welcome ' . $_SESSION["first_name"] . '!").addClass("yellow-text");' . "\r",
                '</script>';
        }
    ?>
    <!-- Carousel options -->
    <script>
        var myLazyLoad = new LazyLoad({
            elements_selector: ".lazy"
        });
    </script>
</body>

</html>