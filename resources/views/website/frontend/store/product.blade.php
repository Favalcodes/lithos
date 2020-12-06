<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{URL::to('frontend/assets/images/logo.png')}}" type="image/x-icon">
    <title>Lithos Collections</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/product.css')}}">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!--Ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>

</head>

<body>
@include("website.frontend.layouts.header")



    <section class="product-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">My Products</h1>
                <p class="lead"><a href="./index.html">Home</a> <i class="fas fa-angle-right"></i> <a href="./product.html">Products</a></p>
            </div>
        </div>
    </section>

    <section class="buttons">
        <hr>
        <div class="container">
            <div class="row">
                <div class="filter">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><img
                            src="{{URL::to('frontend/assets/images/filter-button.png')}}"> FILTER</button>
                    <ul class="dropdown-menu">
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                        <li><a href="#">Noir</a></li>
                        <li><a href="#">Violette</a></li>
                        <li><a href="#">Nuit</a></li>
                    </ul>
                </div>
                <div class="product-rating">
                    <button type="button" class="btn btn-success">RATING</button>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section class="products">
        <div class="container my-5">
            <!--Section: Content-->

            <!-- Section heading -->
            <h3 class="text-center mb-4 pb-2">Our products</h3>
            <!-- Section description -->

            <!-- Grid row -->
            <div class="row ">

                @foreach($products as $product)
                <!-- Grid column -->
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="image">
                        
                            
                            <img src="{{URL::to('frontend/assets/images/noir.jpeg')}}" class="card-img-top img-fluid py-3" alt="">
                           
                        
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body pb-3 text-center">
                            <!--Rating-->
                            <div class="rating">
                                <input type="radio" name="rating" value="5"><label for="5">☆</label>
                                <input type="radio" name="rating" value="4"><label for="4">☆</label>
                                <input type="radio" name="rating" value="3"><label for="3">☆</label>
                                <input type="radio" name="rating" value="2"><label for="2">☆</label>
                                <input type="radio" name="rating" value="1"><label for="1">☆</label>
                            </div>

                            <!-- Title -->
                            <h5 class="card-title mb-1">
                                <a class="name text-center" href="{{route('product', ['product_id'=> $product->id]) }}">{{$product->product_name}} </a>
                                <p class="price">&#8358; {{ $product->price}}</p>
                            </h5>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->

                @endforeach
                </div>
                <!-- Grid row -->
                <!--Section: Content-->
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!--Custom JS-->
    <!-- <script src="./assets/js/custom.js"></script> -->
    <!-- <script src="{{URL::to('frontend/assets/js/login.js')}}"></script> -->
    <script src="{{URL::to('frontend/assets/js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
