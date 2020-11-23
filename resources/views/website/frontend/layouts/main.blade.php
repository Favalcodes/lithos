<!DOCTYPE html>
<html lang="en">

@include('website.frontend.layouts.head')

<body>
    <div class="lightbox-blanket hide" id="news">
        <div class="pop-up-container">
            <div class="pop-up-container-vertical">
                <div class="pop-up-wrapper">
                    <button type="button" class="close" data-dismiss="modal" onclick="GoBack();">&times;</button>
                    <div class="product-details">
                        <div class="product-left">
                            <div class="product-image">
                                <img src="{{ asset('frontend/assets/images/w5.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="pop-logo align-items-center">
                                <img src="{{ asset('frontend/assets/images/pop-logo.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="product-description">
                                <h5 class="slogan">Solidifying your elegance</h5>
                                <p class="sub-slogan">Walk with the divine in elegance</p>
                            </div>

                            <form action="#">
                                <div class="row align-items-center">
                                    <div class="col-md-9 col-9">
                                        <div class="form-group">
                                            <input type="email" class="form-control email-subscribe" id="email" name="email" placeholder="Your Email Address" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <button type="submit" class="btn ">
                                            <img src="{{ asset('frontend/assets/images/send-icon.jpg')}}" alt="" class=" img-fluid"></button>
                                    </div>
                                </div>
                            </form>
                            <div class="dont-show">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Don’t show this popup again
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include("website.frontend.layouts.header")

    <!-- Cart Modal -->
    <div class="modal fade modal-sm" id="cartModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="heading">YOUR CART</h6>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p>Your shopping cart is empty</p>
                        <a href="./product.html">Start shopping</a>
                    </div>
                    <div class="total">
                        <p class="sub-total">Total:</p>
                        <p class="amount">0.00</p>
                    </div>
                    <div class="modal-buttons">
                        <div class="cart-shopping">
                            <a href="./cart.html">VIEW CART</a>
                        </div>
                        <div class="checkout-shopping">
                            <a href="./checkout.html">CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <img src="{{ asset('frontend/assets/images/user2.svg')}}" />
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
                                        <button id="login_lost_btn" type="button" class="btn btn-link"><a
                                                href="./invalid-password.html">Lost your password?</a></button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><a
                                        href="./account.html">LOGIN</a></button>
                                <div class="create-account">
                                    <button id="login_register_btn" type="button" class="btn btn-link">Don't have an
                                        account? create one now <i class="fas fa-arrow-right"></i></button>
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
                                <button type="submit" class="btn btn-primary"><a
                                        href="./account.html">REGISTER</a></button>
                                <div class="back-login">
                                    <button id="register_login_btn" type="button" class="btn btn-link">Back to login<i
                                            class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero -->
    <section class="home-hero">
        <!-- Content -->
        <div class="video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=KlUB2IcaH_k&feature=youtu.be" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Content -->
    </section>

    <!-- Product Showcase -->
    <section class="product-showcase">
        <!-- Slider -->
        <div class="slider">

            <div class="slider-container">
                <div class="slide active" style="background-image: url({{ asset('frontend/assets/images/fern1.png')}});">
                    <div class="info">
                        <h1>Customize your own scent</h1>
                        <p>Want to smell unique, have a fragrance that only you owns? We can do that to suit your personality and style.</p>
                    </div>
                </div>

                <div class="slide" style="background-image: url({{ asset('frontend/assets/images/w5.jpg')}});">
                    <div class="info">
                        <h1>Sourvenir Idea</h1>
                        <p>Wedding, anniversary, birthday or gifting? We got your back.</p>
                    </div>
                </div>

                <div class="slide" style="background-image: url({{ asset('frontend/assets/images/placeholder3.png')}});">
                    <div class="info">
                        <h1>Guest Essential</h1>
                        <p>Want to be different, make your guests smell different? We can do that.</p>
                    </div>
                </div>

            </div>
            <div class="eraser"></div>
        </div>

    </section>

    {{-- Product Display --}}
    <section class="find-a-store">
        <div class="view">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row align-items-center">
                    <!--Grid column-->
                @foreach ($product as $item)
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    <div class="product-desc text-center"><h4>{{$item->product_name}}</h4></div>
                    <div class="product-price text-center">${{$item->price}}</div>
                    </div>
                @endforeach
                    <!--Grid column-->
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
    </section>

    <section class="find-a-store">
        <div class="view" style="background-image: url({{ asset('frontend/assets/images/store.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row align-items-center">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <h6 class="offer">We offer shipping<br> and a secure shopping experience
                        </h6>
                        <button type="button" class="btn btn-warning">FIND A STORE</button>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
    </section>

    <section class="social">
        <div class="social-background">
            <div class="container">
                <h3 class="heading">Follow us on social networks</h3>
                <div class="social-icon">
                    <div class="row">
                        <ul class="list-unstyled icons d-flex">
                            <li class="ion-margin">
                                <a href="#0">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li class="ion-margin">
                                <a href="#0">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>
                            <li class="ion-margin">
                                <a href="#0">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="testimonial">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="swiper">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="s1">
                                        <!-- Card image -->
                                        <div class="user">
                                            <img src="{{ asset('frontend/assets/images/avatar.png')}}" class="card-img-top img-fluid" alt="">
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body pb-3">
                                            <i class="fas fa-quote-left pr-2"></i>
                                            <h6 class="text-center">Michelle Johnson, Australia</h6>
                                            <div class="desc text-center">The multichannel sales engagement platform which automates personal email outreach, calls, and tasks, while Sales can focus on what really matters - closing while Sales can focus on what really matters - closing</div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="s1">
                                        <!-- Card image -->
                                        <div class="user">
                                            <img src="{{ asset('frontend/assets/images/avatar.png')}}" class="card-img-top img-fluid" alt="">
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body pb-3">
                                            <i class="fas fa-quote-left pr-2"></i>
                                            <h6 class="text-center">Michelle Johnson, Australia</h6>
                                            <div class="desc text-center">The multichannel sales engagement platform which automates personal email outreach, calls, and tasks, while Sales can focus on what really matters - closing while Sales can focus on what really matters - closing</div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="s1">
                                        <!-- Card image -->
                                        <div class="user">
                                            <img src="{{ asset('frontend/assets/images/avatar.png')}}" class="card-img-top img-fluid" alt="">
                                        </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body pb-3">
                                            <i class="fas fa-quote-left pr-2"></i>
                                            <h6 class="text-center">Michelle Johnson, Australia</h6>
                                            <div class="desc text-center">The multichannel sales engagement platform which automates personal email outreach, calls, and tasks, while Sales can focus on what really matters - closing while Sales can focus on what really matters - closing</div>
                                        </div>
                                        <!-- Card content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
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
                                    <img src="{{ asset('frontend/assets/images/send-icon.jpg')}}" alt="" class=" img-fluid"></button>
                            </div>
                        </div>
                        <small id="emailHelp" class="form-text mt-3 form-txt grey-txt">Get the latest products, updates,
                            special offers and much more</small>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('website.frontend.layouts.footer')
    <!-- footer -->


    <!-- JS, Popper.js, and jQuery -->
    @include('website.frontend.layouts.foot')

</body>

</html>
