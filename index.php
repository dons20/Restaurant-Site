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
                            <a class="nav-link" href="#intro" id="home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
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
                        <li class="nav-item">
                            <a id="login" href="#loginForm" class="nav-link" data-toggle="modal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="javascript:void(0);">|</a>
                        </li>
                        <li class="nav-item">
                            <a id="reg" href="#registrationForm" class="nav-link" data-toggle="modal">Register</a>
                        </li>
                        <li class="nav-item" style="display: none;">
                            <a id="uname" href="javascript:void(0)" class="nav-link" data-toggle="modal">Username</a>
                        </li>
                        <li class="nav-item" style="display: none;">
                            <a id="order" href="order.php" class="nav-link">Place Order</a>
                        </li>
                        <li class="nav-item" style="display: none;">
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

            <div class="full-bg-img">

                <div class="mask rgba-black-strong">

                    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-md-10">

                                <!-- Heading -->
                                <h2 class="display-3 font-weight-bold white-text mb-2">Asia's Cafe</h2>

                                <!-- Divider -->
                                <hr class="hr-light">

                                <!-- Description -->
                                <h4 class="white-text my-4">Experience A Mouth Filled with Extrodinary Sensation</h4>
                                <button type="button" class="btn btn-outline-white">Read more
                                    <i class="fas fa-book ml-2"></i>
                                </button>

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
        <hr class="my-5">

        <!--Section: About us-->
        <section id="aboutus">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">About Us</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">
		 <a href="img/menu.pdf"><p style="text-align:center">Download our menu (.pdf)</a>
 		<br> <br>
 		<img src="img/coupon.png" height="400" width="400">
		
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 text-center">

                    <!--Excerpt-->
                    <p>	At Asia's Cafe we believe in only the best! Prime cuts of meat, hand picked produce and customer service is our priority. 
			  Our menu is typically that of a chicken house heavily influenced by the Jamaican tradition of indoor grilling.
			  We also compliment our menu with a number of 'yard style' dishes so there's something for everyone.
			  Enjoy our breathtaking ambiance in our elegantly casual dining atmosphere. 
			  Our wait staff believes in the merit system of excellent service and is employed on the basis of tips earned.
			  Therefore you, our valued customer will never have to pay a mandatory service charge.
                    </p>

                    <p><b>Thank you for choosing Asia's Cafe...!.</b>
		    </p>

                   

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: About us-->

        <hr class="my-5">

        <!--Section: Contact-->
        <section id="contact">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 col-md-12">

                    <!-- Form contact -->
                    <form class="p-5">
                        <div class="md-form form-sm">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="opt1" class="form-control form-control-sm" autocomplete='name'>
                            <label for="opt1">Your name</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="opt2" class="form-control form-control-sm" autocomplete='email'>
                            <label for="opt2">Your email</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-tag prefix grey-text"></i>
                            <input type="text" id="opt3" class="form-control form-control-sm">
                            <label for="opt3">Subject</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="opt4" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                            <label for="opt4">Your message</label>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary">Send
                                <i class="fa fa-paper-plane-o ml-1"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Form contact -->

                    <!--Grid column-->


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">


                    <!--Grid row-->
                    <div class="row text-center">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-3">

                            <p>
                                <i class="fa fa-map fa-1x mr-2 grey-text"></i>Vocational Training Development Institute, JM 10012</p>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-3">

                            <p>
                                <i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-5:00</p>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-3">

                            <p>
                                <i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 1(876)975-6658</p>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->



                    <!--Google map-->
                    <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.0246893851568!2d-76.74061778511465!3d18.02405778769993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb3ed230a1d1f9%3A0xd05acd895429b661!2sVocational+Training+Development+Institute!5e0!3m2!1sen!2sjm!4v1524114289221"
                            width="745" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Contact-->

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
            &copy; 2018 Copyright: <a href="javascript:void(0);"> Group #1 VTDI</a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- Login Form -->
    <div id="loginForm" class="modal fade">
        <div class="modal-dialog modal-login cascading-modal">
            <div class="modal-content">
                <div class="modal-header primary-color white-text">
                    <h4 class="title"><i class="fas fa-user"></i> Member Login</h4>	
                    <button id="loginClose" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control mb-x" name="username" required pattern="\S.*\S">	
                            <label>Username</label>	
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" autocomplete="on" required pattern="\S.*\S">	
                            <label>Password</label>
                        </div>        
                        <div class="form-group">
                            <button id="loginBtn" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><i class="fas fa-pencil-alt"></i> Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)">Forgot Password?</a>
                    <a href="javascript:void(0)" onclick="$('#loginForm').one('hidden.bs.modal', function() { $('#registrationForm').modal('show'); }).modal('hide');">Don't have an account?</a>
                </div>
            </div>
        </div>
    </div>

    <div id="registrationForm" class="modal fade">
        <div class="modal-dialog modal-login cascading-modal">
            <div class="modal-content">
                <div class="modal-header primary-color white-text">
                    <h4 class="title"><i class="far fa-clipboard"></i> Register an account</h4>	
                    <button id="regClose" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control mb-x" name="username" required pattern="\S.*\S">	
                            <label>Username</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-x" name="password" autocomplete="on" required pattern="\S.*\S">
                            <label>Password</label>	
                        </div>      
                        <div class="form-group">
                            <input type="password" class="form-control mb-x" name="confirm_password" autocomplete="on" required pattern="\S.*\S">	
                            <label>Confirm Password</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-x" name="first_name" required pattern="\S.*\S">
                            <label>First Name</label>
                        </div>      
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" required pattern="\S.*\S">
                            <label>Last Name</label>
                        </div>      
                        <div class="form-group">
                            <input type="text" class="form-control" name="access_code" pattern="\S.*\S">	
                            <label>(Optional) Access Code</label>
                        </div>      
                        <div class="form-group">
                            <button id="signUpBtn" type="submit" class="btn btn-primary btn-lg btn-block login-btn"><i class="fas fa-pencil-alt"></i> Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Already have an account? <a href="javascript:void(0)" onclick="$('#registrationForm').one('hidden.bs.modal', function() { $('#loginForm').modal('show'); }).modal('hide');">Login here</a>.</p>
                </div>
            </div>
        </div>
    </div>

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
        session_start();
        if (isset($_SESSION["first_name"])) {
            echo '<script> resumeSession("' . $_SESSION["first_name"] . '");</script>';
        }
    ?>
    <!-- Carousel options -->
    <script>
        document.getElementById('home').click();
        var myLazyLoad = new LazyLoad({
            elements_selector: ".lazy"
        });
    </script>
</body>

</html>