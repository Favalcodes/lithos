<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <title>Lithos Collections</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/about.css')}}">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!--Ionicons-->

    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
@include("website.frontend.layouts.header")


    <section class="about-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">About Us</h1>
                <p class="lead"><a href="./index.html">Home</a> <i class="fas fa-angle-right"></i> <a href="./about.html">About Us</a></p>
            </div>
        </div>
    </section>

    <section class="offer">
        <div class="container my-5">
            <!--Section: Content-->

            <!-- Section description -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6">
                    <!-- Card -->
                    <div class="who-we-are">
                        <!-- Card image -->
                        <div class="image">
                            <img src="./assets/images/noir.jpeg" class="img-fluid" alt="">
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="who-body pb-3">

                            <!-- Title -->
                            <h5 class="who-title mb-1">
                                <p class="name">
                                    Who we are
                                </p>
                            </h5>
                            <h5 class="who-text mb-1">
                                <p>
                                    Lithos Collections is your number one stop shop for fragrances. Our products are here to enhance and exude your elegance and confidence in whatever environment you find yourself, no matter how long you stay.
                                </p>
                            </h5>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-4">
                    <!-- Card -->
                    <div class="vision">
                        <!-- Card image -->
                        <div class="image">
                            <img src="./assets/images/noir.jpeg" class="img-fluid" alt="">
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="vision-body pb-3">

                            <!-- Title -->
                            <h5 class="vision-title mb-1">
                                <p class="name">
                                    Our Vision
                                </p>
                            </h5>
                            <h5 class="vision-text mb-1">
                                <p>
                                    To make fragrances that are non-allergens to both our consumers and non-consumers with the use of aromatherapeutical oils.
                                </p>
                            </h5>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
            <!--Section: Content-->

        </div>
    </section>

    <section class="choice">
        <div class="container">
            <h3 class="heading">
                Why Choose us
            </h3>
            <p class="sub-heading">
                Our benefit
            </p>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="descriptions">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="icon">
                                    <img src="./assets/images/support.png">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>24/7 Support</h3>
                                <div class="text">
                                    Our customer service representatives are on standby to assist you. Speedy pick ups, call-backs or email reply.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="icon">
                                    <img src="./assets/images/logistics.png">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Fast Delivery</h3>
                                <div class="text">
                                    Our deliveries are efficient and fast to wherever your location is.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="icon">
                                    <img src="./assets/images/quality.png">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="text">
                                    <h3>High Quality</h3>
                                    Our products are of high quality, refined with class and taste
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="our-image">
                        <!-- Card image -->
                        <div class="image">
                            <img src="./assets/images/violette.jpeg" class="img-fluid" alt="">
                        </div>
                        <!-- Card image -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="newsletter">
        <div class="container mt-5">

            <div class="row mt-5">
                <div class="col-md-5">
                    <p class="contact-txt grey-txt">Stay connected to lithos</p>
                </div>
                <div class="col-md-7">
                    <form action="#">
                        <div class="row align-items-center">
                            <div class="col-md-10 col-9">
                                <div class="form-group">
                                    <input type="email" class="form-control subscribe" id="email" name="email" placeholder="Your Email Address" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-2 col-3">
                                <button type="submit" class="btn "> 
                                    <img src="./assets/images/send-icon.jpg" alt="" class=" img-fluid"></button>
                            </div>
                        </div>
                        <small id="emailHelp" class="form-text mt-3 form-txt grey-txt">Get the latest products, updates,
                            special offers and much more</small>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="dark-area mt-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-5">
                    <div class="row pt-2">
                        <div class="col-md-2 col">
                            <a href="./faq.html">
                                <p class="foot-txt my-2 bor-txt">Faq</p>
                            </a>
                        </div>
                        <div class="col-md-6 col">
                            <a href="./terms.html">
                                <p class="foot-txt my-2 bor-txt">Terms and conditions</p>
                            </a>
                        </div>
                        <div class="col-md-4 col">
                            <a href="./privacy-policy.html">
                                <p class="foot-txt my-2">Privacy Policy</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 col">
                    <img src="./assets/images/footer-logo.svg" alt="logo" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <div class="row  align-items-center">
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/paypal.ico" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/visa.ico" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/paypal.ico" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/mastercard.ico" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--Custom JS-->
    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
