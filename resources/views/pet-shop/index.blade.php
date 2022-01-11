@extends('pet-shop.layout')

@section('content')
<div class="slider-area">
    <div class="slider-active owl-dot-style owl-carousel">
        <div class="single-slider pt-100 pb-100 yellow-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 col-sm-7">
                        <div class="slider-content slider-animated-1 pt-114">
                            <h3 class="animated">We keep pets for pleasure.</h3>
                            <h1 class="animated">Food & Vitamins <br>For all Pets</h1>
                            <div class="slider-btn">
                                <a class="animated" href="product-details.">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 col-sm-5">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="img/slider/slider-single-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider pt-100 pb-100 yellow-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                        <div class="slider-content slider-animated-1 pt-114">
                            <h3 class="animated">We keep pets for pleasure.</h3>
                            <h1 class="animated">Food & Vitamins <br>For all Pets</h1>
                            <div class="slider-btn">
                                <a class="animated" href="product-details.">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 col-12">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="img/slider/slider-single-img-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-95 pb-70 gray-bg">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h4>Most Populer</h4>
            <h2>Recent Products</h2>
        </div>
        <div class="row">
            @foreach ($randProducts as $randProduct)

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="product-wrapper mb-10">
                    <div class="product-img">
                        <a href="{{route('product-detail', ['id' =>$randProduct->id])}}">
                            <img src="storage/{{$randProduct->image}}" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
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
                        <h4><a href="{{route('product-detail', ['id' =>$randProduct->id])}}">{{$randProduct->name}}</a></h4>
                        <div class="product-price">
                            <span >{{$randProduct->price}} </span>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="deal-area bg-img pt-95 pb-100">
    <div class="container">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h4>Best Product</h4>
                <h2>Deal of the Week</h2>
            </div>

        <div class="row">
            @foreach ($product as $item)
            <div class="col-lg-6 col-md-6">
                <div class="deal-img wow fadeInLeft" style="height: 300px; width: 300px;">
                    <a href="#"><img src="storage/{{$item->image}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="deal-content">
                    <h3><a href="#">{{$item->name}}</a></h3>
                    <div class="product-price">
                        <span >{{$item->price}} </span>
                    </div>
                    <p>{{$item->description}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
