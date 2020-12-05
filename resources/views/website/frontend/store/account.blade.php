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
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/account.css')}}">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!--Ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
@include('website.frontend.store.includes.header')
    <!-- Cart Modal -->
    
    <!-- Cart Modal -->

    <!-- Modal -->
    <div class="modal fade" id="login-modal" data-toggle="modal">
        <div class="modal-dialog" role="document">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="./assets/images/user2.svg" />
                        <p>Sign in to make the most out of your shopping experience.</p>
                        <div id="div-forms">
                            <form id="login-form" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-auto text-muted">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Remember me</label>
                                        </div>
                                        <button id="login_lost_btn" type="button" class="btn btn-link"><a href="./invalid-password.html">Lost your password?</a></button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="./account.html">LOGIN</a></button>
                                <div class="create-account">
                                    <button id="login_register_btn" type="button" class="btn btn-link">Don't have an account? create one now <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                            <form id="sign-form" enctype="multipart/form-data" method="POST" style="display: none;">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="./account.html">REGISTER</a></button>
                                <div class="back-login">
                                    <button id="register_login_btn" type="button" class="btn btn-link">Back to login<i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--/ Modal -->

    <section class="account-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">My Account</h1>
                <p class="lead"><a href="./index.html">Home</a> <i class="fas fa-angle-right"></i> <a href="./account.html">My Account</a></p>
            </div>
        </div>
    </section>


    <section class="account-tabs my-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="tab">
                        <button class="tablinks leadbtn" onclick="openBoard(event, 'account')">My account</button>
                        <button class="tablinks boardbtn" onclick="openBoard(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
                        <button class="tablinks boardbtn" onclick="openBoard(event, 'Orders')">Orders</button>
                        <button class="tablinks boardbtn" onclick="openBoard(event, 'Downloads')">Downloads</button>
                        <button class="tablinks boardbtn" onclick="openBoard(event, 'Addresses')">Addresses</button>
                        <button class="tablinks boardbtn" onclick="openBoard(event, 'acctDetails')">Account deatils</button>
                        <button class="tablinks boardbtn" onclick="openBoard(event, 'Logout')">Logout</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="Dashboard" class="tabcontent">
                        <h6 class="logtxt mb-4">Hello Benbyx (not Benbyx? <a href="">Log out</a>)</h6>
                        <p class="logptxt">From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
                    </div>

                    <div id="Orders" class="tabcontent">
                        <div class="orderbg mb-3">
                            <p class="order-txt">No order has been made yet.</p>
                        </div>
                        <button type="submit" class="btn btn-primary">BROWSE PRODUCTS</button>
                    </div>

                    <div id="Downloads" class="tabcontent">
                        <div class="orderbg mb-3">
                            <p class="order-txt">No downloads available yet.</p>
                        </div>
                        <button type="submit" class="btn btn-primary">BROWSE PRODUCTS</button>


                        <p></p>
                    </div>
                    <div id="Addresses" class="tabcontent">
                        <p class="views-itnro">The following addresses will be used on the checkout page by default.</p>
                        <div class="card mb-3">
                            <div class="card-body text-primary">
                                <h5 class="card-title">Billing address</h5>
                                <a href="#">Add</a>
                                <p class="card-text">You have not set up this type of address yet.</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-secondary">
                                <h5 class="card-title">Shipping address</h5>
                                <a href="#">Add</a>
                                <p class="card-text">You have not set up this type of address yet.</p>
                            </div>
                        </div>
                    </div>
                    <div id="acctDetails" class="tabcontent">
                        <form>
                            <div class="form-group">
                                <label for="First name">First Name</label>
                                <input type="text" class="form-control" name="firtname" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="Last name">Last Name</label>
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Display name</label>
                                <input type="text" class="form-control" name="username" placeholder="Benbyx" required>
                                <small class="text-muted" style="font-style: italic;">This will be how your name will be displayed in the account section and in reviews</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" name="email" placeholder="someone@mail.com" required>
                            </div>
                            <h6 class="password-change" style="margin-top: 5%;">Password change</h6>
                            <div class="form-group">
                                <label for="password">Current password (leave blank to leave unchanged)</label>
                                <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="New password">New password (leave blank to leave unchanged)</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm password">Confirm password</label>
                                <input type="password" class="form-control" name="pasword">
                            </div>
                            <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                        </form>

                    </div>
                    <div id="Logout" class="tabcontent">

                        <p>Are you sure you want to logout?</p>
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


    <script>
        function openBoard(evt, boardName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(boardName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

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
