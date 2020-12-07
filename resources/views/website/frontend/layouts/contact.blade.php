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
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/contact.css')}}">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!--Ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>

</head>

<body>
@include("website.frontend.layouts.header")



    <section class="contact-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Contact Us</h1>
                <p class="lead"><a href="./index.html">Home</a> <i class="fas fa-angle-right"></i> <a href="./contact.html">Contact Us</a></p>
            </div>
        </div>
    </section>


    <section class="contact-icons">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="call text-center">
                        <img src="./assets/images/phone.png">
                        <h6 class="text-center">Phone</h6>
                        <p>+234-813-739-4300</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="location">
                        <img src="./assets/images/location.png">
                        <h6 class="text-center">Address</h6>
                        <p>Lagos</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="mail">
                        <img src="./assets/images/mail.png">
                        <h6 class="text-center">Email</h6>
                        <a>lithosperfumeandcollection@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section class="contact-form">
        <div class="container">
            <h4 class="contact-title">Leave Your Message</h4>
            <p class="contact-text">Our staff will call back later and answer your questions.</p>
            <form class="py-5 text-center">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-success my-2">SEND MESSAGE</button>
            </form>
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
