<header>
        <nav class="navbar navbar-expand-lg sticky">
            <div class="container">
                <a class="navbar-brand" href="/index.html">
                    <img src="{{ asset('frontend/assets/images/logo.png')}}" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#care-navbar" aria-controls="care-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <ion-icon name="menu-outline"></ion-icon>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="care-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active mx-sm-2">
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="./product.html">Products</a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="./about.html">About us</a>
                        </li>
                        <li class="nav-item mx-sm-2">
                            <a class="nav-link" href="./contact.html">Contact us</a>
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