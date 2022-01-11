@extends('pet-shop.layout')

@section('content')
<div class="deal-area bg-img pt-95 pb-100">
    <div class="container">

        @foreach ($product as $item)
        <div class="container">
            <div class="title">
                <h4>{{$item->name}}</h4>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="deal-img wow fadeInLeft">
                    <a href="#"><img src="storage/{{$item->image}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h2>{{$item->description}}</h2>
                <div class="deal-content">
                    <div class="product-price">
                        <span >{{$item->price}} Eur</span>
                    </div>
                </div>
            </div>
            <div class="quality-wrapper mt-30 product-quantity">
                <label>Qty:</label>
                <div class="cart-plus-minus">
                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                </div>
            </div>
            <div class="product-list-action">
                <div class="product-list-action-left">
                    <a class="addtocart-btn" href="#" title="Add to cart">
                        <i class="ion-bag"></i>
                        Add to cart
                    </a>
                </div>
                <div class="product-list-action-right">
                    <a href="#" title="Wishlist">
                        <i class="ti-heart"></i>
                    </a>
                </div>
            </div>

        </div>
        @endforeach

    </div>





@endsection
