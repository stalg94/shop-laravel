@extends('pet-shop.layout')

@section('content')
<div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(img/banner/banner-2.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Shop Page</h2>
            <ul>
                <li><a href="index.html">home</a></li>
                <li class="active">Shop Page</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-100 pb-100 gray-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="product-sorting-wrapper">
                        <div class="product-show shorting-style">
                            <label>Showing <span>1-20</span> of <span>100</span> Results</label>
                            <select>
                                <option value="">12</option>
                                <option value="">24</option>
                                <option value="">36</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid-list-options">
                        <ul class="view-mode">
                            <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid4-alt"></i></a></li>
                            <li><a href="#product-list" data-view="product-list"><i class="ti-align-justify"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                <div class="product-wrapper mb-10">
                                    <div class="product-img">
                                        <a href="{{route('product-detail', ['id' =>$product->id])}}">
                                            <img src="storage/{{$product->image}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="ti-plus"></i>
                                            </a>
                                            <a title="Add To Cart" href="{{route('add-card', ['id' => $product->id])}}">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                        <div class="product-action-wishlist">
                                            <a title="Wishlist" href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{route('product-detail', ['id' =>$product->id])}}">{{$product->name}}</a></h4>
                                        <div class="product-price">
                                            <span >{{$product->price}}</span>
                                        </div>
                                    </div>
                                    <div class="product-list-content">
                                        <h4><a href="#">Dog Calcium Food</a></h4>
                                        <div class="product-price">
                                            <span class="new">$19.00 </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                        <div class="product-list-action">
                                            <div class="product-list-action-left">
                                                <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                                            </div>
                                            <div class="product-list-action-right">
                                                <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="pagination-style text-center mt-10">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-arrow-left"></i></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a class="active" href="#"><i class="icon-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="shop-widget">
                        <h4 class="shop-sidebar-title">Search Products</h4>
                        <div class="shop-search mt-25 mb-50">
                            <form class="shop-search-form">
                                <input type="text" placeholder="Find a product">
                                <button type="submit">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="shop-widget">
                        <h4 class="shop-sidebar-title">Filter By Price</h4>
                         <div class="price_filter mt-25">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Food Category </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Canned Food</a></li>
                                <li><a href="#">Dry Food</a></li>
                                <li><a href="#">Food Pouches</a></li>
                                <li><a href="#">Food Toppers</a></li>
                                <li><a href="#">Fresh Food</a></li>
                                <li><a href="#">Frozen Food</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Top Brands </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Authority</a></li>
                                <li><a href="#">AvoDerm Natural</a></li>
                                <li><a href="#">Bil-Jac</a></li>
                                <li><a href="#">Blue Buffalo</a></li>
                                <li><a href="#">Castor & Pollux</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Health Consideration </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Bone Development <span>18</span></a></li>
                                <li><a href="#">Digestive Care <span>22</span></a></li>
                                <li><a href="#">General Health <span>19</span></a></li>
                                <li><a href="#">Hip & Joint  <span>41</span></a></li>
                                <li><a href="#">Immune System  <span>22</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">Nutritional Option </h4>
                         <div class="shop-list-style mt-20">
                            <ul>
                                <li><a href="#">Grain Free  <span>18</span></a></li>
                                <li><a href="#">Natural <span>22</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area">
    <div class="footer-top pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="footer-info-wrapper">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="img/logo/logo-2.png" alt="">
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, co adipisi elit, sed eiusmod tempor incididunt ut labore et dolore</p>
                            <div class="social-icon">
                                <ul>
                                    <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-social-skype"></i></a></li>
                                    <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 pl-50">
                        <h4 class="footer-title">USEFUL LINKS</h4>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">Help & Contact Us</a></li>
                                <li><a href="#">Returns & Refunds</a></li>
                                <li><a href="#">Online Stores</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-30 pl-70">
                        <h4 class="footer-title">HELP</h4>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">Faq's </a></li>
                                <li><a href="#">Pricing Plans</a></li>
                                <li><a href="#">Order Traking</a></li>
                                <li><a href="#">Returns </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="newsletter-wrapper">
                            <p>Subscribe to our newsletter and get 10% off your first purchase..</p>
                            <div class="newsletter-style">
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Your mail address" required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clear"><input type="submit" value="SEND" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="payment-img">
                            <a href="index.html">
                                <img src="img/icon-img/payment.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-top-1 pt-17 pb-15">
                        <div class="copyright text-center">
                            <p>Copyright © <a href="#">Marten.</a> All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
