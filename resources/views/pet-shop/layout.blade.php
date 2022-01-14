<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pet Food Magazine</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- all css here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/simple-line-icons.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <header class="header-area">
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="welcome-area">
                                <p>Welcome To Our Store! </p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="account-curr-lang-wrap f-right">
                                <ul>
                                    <li class="top-hover"><a href="#">$Doller (US) <i class="icon-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="#">Taka (BDT)</a></li>
                                            <li><a href="#">Riyal (SAR)</a></li>
                                            <li><a href="#">Rupee (INR)</a></li>
                                            <li><a href="#">Dirham (AED)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img alt="flag" src="img/icon-img/en.jpg"> English  <i class="icon-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="#"><img alt="flag" src="img/icon-img/bl.jpg">Bangla </a></li>
                                            <li><a href="#"><img alt="flag" src="img/icon-img/ar.jpg">Arabic</a></li>
                                            <li><a href="#"><img alt="flag" src="img/icon-img/in.jpg">Hindi </a></li>
                                            <li><a href="#"><img alt="flag" src="img/icon-img/sp.jpg">Spanish</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                            <div class="logo pt-39">
                                <a href="{{route('home')}}"><img alt="" src="img/logo/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="{{route('home')}}">HOME</a></li>
                                        <li><a href="{{route('food')}}">Food</a>
                                        <li><a href="{{route('about')}}">ABOUT</a></li>
                                        <li><a href="{{route('contact-us')}}">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                            <div class="search-login-cart-wrapper">
                                <div class="header-search same-style">
                                    <button class="search-toggle">
                                        <i class="icon-magnifier s-open"></i>
                                        <i class="ti-close s-close"></i>
                                    </button>
                                    <div class="search-content">
                                        <form action="#">
                                            <input type="text" placeholder="Search">
                                            <button>
                                                <i class="icon-magnifier"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-login same-style">
                                    <a href="{{route('profile')}}"><i class="icon-user icons"></i></a>
                                </div>
                                <div class="header-cart same-style">
                                    <button class="icon-cart">
                                        <i class="icon-handbag"></i>
                                        <span class="count-style">{{Cart::session(Session::getId())->getTotalQuantity()}}</span>
                                    </button>


                                    <div class="shopping-cart-content">
                                        @foreach ($cart as $item)
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="storage/{{$item->attributes->image}}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">{{$item->name}} </a></h4>
                                                    <h6>Qty: {{$item->quantity}}</h6>
                                                    <span>Price: {{$item->price}}</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ti-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        @endforeach

                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>Free</span></h4>
                                            <h4>Total : <span class="shop-total">{{$sum}} Eur</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart.html">view cart</a>
                                            <a href="{{route('checkout')}}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')

		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ti-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab">
                                    <img src="img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Dog Calcium Food</h3>
                                <div class="product-price">
                                    <span class="new">$20.00 </span>
                                    <span class="old">$50.00</span>
                                </div>
                                <div class="product-rating">
                                    <i class="icon-star theme-color"></i>
                                    <i class="icon-star theme-color"></i>
                                    <i class="icon-star theme-color"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">XS</option>
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value=""> L</option>
                                            <option value="">XL</option>
                                            <option value="">XXL</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="2" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



		<!-- all js here -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/elevetezoom.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
