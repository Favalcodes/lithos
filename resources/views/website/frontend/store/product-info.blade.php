<!doctype html>
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
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/product-info.css')}}">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://kit.fontawesome.com/6ebc2d8f5f.js" crossorigin="anonymous"></script>
    <!--Ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>


</head>

<body>

@include("website.frontend.layouts.header")

    <!-- Cart Modal -->
   
    <!-- Cart Modal -->

    <!-- Modal -->
   
    <!--/ Modal -->

    <!-- main -->
    <section id="main ">
        <div class="jumbotron-fluid">
            <div class="title">
                <div class="row align-items-center  text-center py-5">
                    <div class="col-md-12 pt-5">
                        <h3 class="mb-3  mt-lg-5 lead-txt">My account</h3>

                        <p class="sub-txt mt-4"><a href="./index.html" class="sub-txt">Home</a> <i class="fas fa-angle-right"></i> <a href="./product-info.html" class="sub-txt">My account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ main -->
    <!-- details -->
    <section id="details">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="mySlides">
                        <img src="{{URL::to('images/1604821591.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="mySlides">
                        <img src="{{URL::to('images/1604821591.jpeg')}}" class="img-fluid">
                    </div>

                    <div class="mySlides">
                        <img src="{{URL::to('images/1604821591.jpeg')}}" class="img-fluid">
                    </div>
                    <!-- images at the bottom  -->
                    <div class="row my-3">
                        <div class="col-md-4 col">
                            <img class="demo cursor img-fluid" src="{{URL::to('images/1604821591.jpeg')}}" onclick="currentSlide(1)">
                        </div>
                        <div class="col-md-4 col">
                            <img class="demo cursor img-fluid" src="{{URL::to('images/1604821591.jpeg')}}" onclick="currentSlide(2)">
                        </div>
                        <div class="col-md-4 col">
                            <img class="demo cursor img-fluid" src="{{URL::to('images/1604821591.jpeg')}}" onclick="currentSlide(3)">
                        </div>
                    </div>
                    <!-- images at the bottom  -->
                </div>
                <div class="col-md-6">
                    <h4 class="details-txt my-2">{{$product->product_name}}</h4>
                    <div class="rating">
                        <input type="radio" name="rating" value="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1"><label for="1">☆</label>
                    </div>
                    {{$product->description}}
                    <div class="price my-2">&#8358;{{{$product->price}}}.00</div>
                    <div class="info-txt my-2">
                    
                    </div>
                    <div class="row mt-3 mb-5">
                        <div class="col-md-4 col">
                            <form method="post" action="{{route('add')}}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group col mx-auto">
                                    <div class="input-group-btn counter">
                                        <button type="button" id="down" class="btn btn-default" onclick.prevent=" down('1')"><img src="{{URL::to('frontend/assets/images/minus.svg')}}" alt="-" class="img-fluid"></button>
                                    </div>
                                    <input type="text" id="myNumber" name="myNumber" class="form-control input-number text-center counter" value="1" />
                                    <input type="hidden" id="product_id" name="product_id"  value="{{$product->id}}" />
                                    <div class="input-group-btn counter">
                                        <button id="up" class="btn btn-default" onclick.prevent="up('1000')"><img src="{{URL::to('frontend/assets/images/plus.svg')}}" alt="+" class="img-fluid"></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col"><button type="submit" class="btn cart-btn">Add to cart</button></div>
                        <div class="col-md-4 col">
                            <button class="btn btn-wish"> <img src="{{URL::to('frontend/assets/images/heart.svg')}}" alt="add to wishlist"></button>
                        </div>
                        </form>
                    </div>
                    <hr>
                    <div class="further-details"><b class="fut-details-txt">SKU:</b>
                        <t class="text-muted">Noir</t>
                    </div>
                    <div class="further-details"><b class="fut-details-txt">Categories:</b>
                        <t class="text-muted">{{$product->category->brand_name}}</t>
                    </div>
                    <div class="further-details"><b class="fut-details-txt">Tag:</b>
                        <t class="text-muted">Edt</t>
                    </div>
                    <div class="further-details"><b class="fut-details-txt">Share:</b> <img src="{{URL::to('frontend/assets/images/Vector-2.jpg')}}" alt="share" class="img-fluid mx-1"> <img src="{{URL::to('frontend/assets/images/Path.jpg')}}" alt="share" class="img-fluid mx-1"> <img src="{{URL::to('frontend/assets/images/Vector-1.jpg')}}" alt="share"
                            class="img-fluid mx-1"> <img src="{{URL::to('frontend/assets/images/Vector.jpg')}}" alt="share" class="img-fluid mx-1"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- details -->
    <!--  tabs-->
    <section id="tabs">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">
                    <div class="tab">
                        <button class="tablinks tab-title" onclick="openTabs(event, 'Description')" id="defaultOpen">Description</button>
                        <button class="tablinks tab-title" onclick="openTabs(event, 'Addtional Information')">Addtional Information</button>
                        <button class="tablinks tab-title" onclick="openTabs(event, 'Reviews')">Reviews(2)</button>

                    <div id="Description" class="tabcontent ">
                        <h3 class="details mt-3">Product Description</h3>
                        <p class="sub-des">{{$product->product_desc}}</p>
                        <h4 class="mt-5 mb-2 text-center related-txt">Related Products</h4>
                        <div class="row">
                            @foreach($products as $pro)
                                @if($pro->category->id == $product->category->id)
                            <div class="col-md-2">
                                <img src="./assets/images/violette.jpeg" alt="related products" class="img-fluid">
                                <div class="row">
                                    <div class="col-md-6 col">
                                        <h3 class="related-title">{{$pro->product_name}}</h3>
                                    </div>
                                    <div class="col-md-6 col">
                                        <h3 class="related-price">&#8358;{{$pro->price}}</h3>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div id="Addtional Information" class="tabcontent">
                        <h3 class="details mt-3">Additional Infomation</h3>
                        <p class="sub-des">This is made using oils used for aromathrapy and can invoke the sense of calm in the user.</p>
                        <h4 class="mt-5 mb-2 text-center related-txt">Related Products</h4>
                        <div class="row">
                            @foreach($products as $pro)
                                @if($pro->category->id == $product->category->id)
                            <div class="col-md-2">
                                <img src="./assets/images/violette.jpeg" alt="related products" class="img-fluid">
                                <div class="row">
                                    <div class="col-md-6 col">
                                        <h3 class="related-title">{{$pro->product_name}}</h3>
                                    </div>
                                    <div class="col-md-6 col">
                                        <h3 class="related-price">&#8358;{{$pro->price}}</h3>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div id="Reviews" class="tabcontent">
                        <div class="row my-3 ">
                            <div class="col-md-4 user-rev">
                                <img src="./assets/images/avatar.png" alt="user-review" class="img-fluid">
                                <div class="row my-2">
                                    <div class="col-md-6">
                                        <div class="rating">
                                            <input type="radio" name="rating" value="5"><label for="5">☆</label>
                                            <input type="radio" name="rating" value="4"><label for="4">☆</label>
                                            <input type="radio" name="rating" value="3"><label for="3">☆</label>
                                            <input type="radio" name="rating" value="2"><label for="2">☆</label>
                                            <input type="radio" name="rating" value="1"><label for="1">☆</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 my-3">
                                <p class="review-date">June 28, 2020</p>
                                <h3 class="reviewer">March 28, 2019</h3>
                                <p class="comments">I love the smell of the perfume and would love to buy for my husband.</p>
                            </div>
                        </div>
                        <div class="row my-3 ">
                            <div class="col-md-4 user-rev">
                                <img src="./assets/images/avatar.png" alt="user-review" class="img-fluid">
                                <div class="row my-2">
                                    <div class="col-md-6">
                                        <div class="rating">
                                            <input type="radio" name="rating" value="5"><label for="5">☆</label>
                                            <input type="radio" name="rating" value="4"><label for="4">☆</label>
                                            <input type="radio" name="rating" value="3"><label for="3">☆</label>
                                            <input type="radio" name="rating" value="2"><label for="2">☆</label>
                                            <input type="radio" name="rating" value="1"><label for="1">☆</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 my-3">
                                <p class="review-date">July 16, 2020</p>
                                <h3 class="reviewer">July 16, 2020</h3>
                                <p class="comments">The smell is beautiful, it aligns with my aura.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--  tabs-->


    <!-- contact -->

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
    <!-- contact -->

    <!-- footer -->
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
    <!-- <script src="./assets/js/custom.js"></script> -->
    <script src="{{URL::to('frontend/assets/js/login.js')}}"></script>
    <script src="{{URL::to('frontend/assets/js/info.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
