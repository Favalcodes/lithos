<header>
        <nav class="navbar navbar-expand-lg sticky">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="./assets/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#care-navbar" aria-controls="care-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <ion-icon name="menu-outline"></ion-icon>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="care-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active mx-sm-2">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="{{route('products')}}">Products <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="/about">About us</a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="/contact">Contact us</a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="#cartModal" data-toggle="modal" data-target="#cartModal">
                                <ion-icon name="cart-outline" style="font-size: 32px;"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="#login-modal" data-toggle="modal" data-target="#login-modal">
                                <ion-icon name="person-circle-outline" style="font-size: 32px;"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="#">
                                <ion-icon name="search-outline" style="font-size: 32px;"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                            <a href="./cart">VIEW CART</a>
                        </div>
                        <div class="checkout-shopping">
                            <a href="{{URL::to('frontend/checkout.html')}}">CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <form action="{{route('login')}}" id="login-form" enctype="multipart/form-data" method="POST">
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
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                                <div class="create-account">
                                    <button id="login_register_btn" type="button" class="btn btn-link">Don't have an account? create one now <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                            <form action="{{route('register')}}" id="sign-form" enctype="multipart/form-data" method="POST" style="display: none;">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-primary" value="REGISTER">
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