@extends('pet-shop.layout')

@section('content')
@if ($messageSuccessOrder)

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{$messageSuccessOrder}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

<div class="checkout-area pt-95 pb-70">
    <div class="container">
        <h3 class="page-title">checkout</h3>
        <div class="row">
            <div class="col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-1">billing information</a></h5>
                            </div>
                            <div id="payment-1" class="panel-collapse collapse">
                                <form method="POST" action="{{route('make-order')}}" >
                                    @csrf
                                    <div class="panel-body">
                                        <div class="billing-information-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>First Name</label>
                                                        <input name="name" type="text" value="{{$user->name}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Email Address</label>
                                                        <input name="email" type="email" value="{{$user->email}} " readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Address</label>
                                                        <input name="address" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>city</label>
                                                        <input name="city" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>State/Province</label>
                                                        <input name="state" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Zip/Postal Code</label>
                                                        <input name="zip" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Telephone</label>
                                                        <input name="telephone" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-review">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="width-1">Product Name</th>
                                                                <th class="width-2">Price</th>
                                                                <th class="width-3">Qty</th>
                                                                <th class="width-4">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        @foreach ($cart as $item)

                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="o-pro-dec">
                                                                        <p>{{$item->name}}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-price">
                                                                        <p>{{$item->price}}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-qty">
                                                                        <p>{{$item->quantity}}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="o-pro-subtotal">
                                                                        <p>{{$item->price * $item->quantity}}</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="3">Grand Total</td>
                                                                <td colspan="1">{{$sum}}</td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <span>
                                                        Forgot an Item?
                                                        <a href="#"> Edit Your Cart.</a>

                                                    </span>
                                                </div>
                                            </div>

                                            <div class="billing-back-btn">
                                                <div class="billing-btn">
                                                    <button type="submit">Make an Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">History of Orders</a></h5>
                            </div>
                            <div id="payment-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="order-review-wrapper">
                                        <div class="order-review">
                                            <div class="table-responsive">
                                                @foreach ($orders as $order)

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="width-1">Product Name</th>
                                                            <th class="width-2">Price</th>
                                                            <th class="width-3">Qty</th>
                                                            <th class="width-4">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($order->cart_data as $cart_data )

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>{{$cart_data['name'] }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>{{$cart_data['price'] }} Eur</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>{{$cart_data['quantity'] }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>{{$cart_data['quantity'] * $cart_data['price']}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach

                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3">Grand Total</td>
                                                            <td colspan="1">{{$order->total_sum}} Eur</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
