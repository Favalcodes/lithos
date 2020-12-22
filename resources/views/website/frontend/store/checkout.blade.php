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
    <link rel="stylesheet" href="./assets/css/checkout.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!--Ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>

</head>

<body>

@include("website.frontend.layouts.header")

    <section class="checkout-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Cart</h1>
                <p class="lead"><a href="./index.html">Home</a> <i class="fas fa-angle-right"></i> <a href="./checkout.html">Checkout</a></p>
            </div>
        </div>
    </section>

    <section class="shopping">
        <div class="container">
            <div class="shoppingbg">
                <p class="shopping-txt">Returning customer? <a href="#">Click here to login</a></p>
            </div>
        </div>
    </section>

    <section class="checkout-form">
        <div class="container">
            <div class="checkout-text">BILLING DETAILS</div>
            <form method="post" action="/payment">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputfname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputlname" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Company name(optional)</label>
                        <input type="text" class="form-control" id="inputcname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Country/Region</label>
                        <input type="text" class="form-control" id="country" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Street address</label>
                    <input type="text" class="form-control" id="inputAddress" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Town/City</label>
                        <input type="text" class="form-control" id="inputcname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Post code</label>
                        <input type="number" class="form-control" id="code" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone number</label>
                        <input type="number" class="form-control" id="inputnumber" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Username</label>
                        <input type="username" class="form-control" id="inputuname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                </div>
            
        </div>
    </section>

    <section class="checkout-summary">
        <div class="container">
            <div class="my-5">
                <div class="row">
                    <div class="col-md-12 main-content">
                        <table class="shop_table cart col-md-6">
                            <h5 class="form-title my-4 py-2">YOUR ORDER</h5>
                           
                            <tbody>
                            @php
                                $totals=[];
                            @endphp
                            @foreach($products as $product)
                            @foreach(Auth::user()->cart as $cart)
                            @if($cart->product_id == $product->id)
                                <tr>
                                    <td><img src="./assets/images/product1.jpg" alt="" class="img-fluid"> <a href="./product-info.html">{{$product->product_name}}</a> </td>
                                    <!-- <td class="product-name"></td> -->
                                    <!-- <td><input class="qty" type="number" value="1"></td> -->
                                    <td>
                                        <!-- <b>£85.00</b> -->
                                        <span class="price "><b>&#8358; {{$product->price}}.00</b></span>
                                    </td>
                                </tr>
                                @php
                                        $total=$cart->quantity*$product->price;
                                        $totals[]=$total;
                                        
                                @endphp
                            @endif
                            @endforeach
                            @endforeach
                                <tr>
                                    <td><b>Subtotal</b></td>
                                    <td><span class="price text-muted">&#8358;4200.00</span></td>

                                </tr>
                                <tr class="order-total">
                                    <td><b>Total</b></td>
                                    <td><span class="price"><b>&#8358;{{array_sum($totals)}}.00</b></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="payment-method my-3">
                            <div class="form-checkout checkout-payment">
                                <h5 class="form-title">YOUR PAYMENT</h5>
                                <div class="payment_methods">
                                    <div class="payment_method my-3">
                                        <label><input name="payment_method" type="radio" value="">MASTERCARD</label>
                                        <div class="payment_box">
                                        </div>
                                    </div>
                                    <div class="payment_method ">
                                        <label><input name="payment_method" type="radio">VISA</label>
                                        <div class="payment_box">
                                        </div>
                                    </div>
                                    <div class="payment_method my-3">
                                        <label><input name="payment_method" type="radio" value="paypal">PAYPAL</label>
                                        <div class="payment_box">
                                        </div>
                                    </div>
                                    <div class="payment_method ">
                                        <label><input name="payment_method" type="radio" value="paystack">PAYSTACK</label>
                                        <div class="payment_box">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I have read and agree to the website <a href="#">terms and conditions *</a></label>
                            </div>
                            <button class="button btn-primary medium my-3">PLACE ORDER</button>
            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cart section end-->
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
                            <a href="#">
                                <p class="foot-txt my-2 bor-txt">Faq</p>
                            </a>
                        </div>
                        <div class="col-md-6 col">
                            <a href="#">
                                <p class="foot-txt my-2 bor-txt">Terms and conditions</p>
                            </a>
                        </div>
                        <div class="col-md-4 col">
                            <a href="#">
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
