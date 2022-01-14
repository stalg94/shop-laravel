<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\CartServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //

    public function shoplist(){

        $products = Product::all();
        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');


        return view('pet-shop\shop-food',[
            'products' => $products,
            'cart' => $cart,
            'sum' => $sum,

        ]);
    }

    public function shopindex(){
        $randProducts = Product::query()->inRandomOrder()->limit(3)->get();

        $product = Product::query()->select()->inRandomOrder()->limit(1)->get();

        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');


        return view('pet-shop\index',[
            'randProducts' => $randProducts,
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum,
        ]);
    }

    public function productDetails(Request $request){

        $product = Product::query()->where(['id' => $request->id])->get();
        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');

        return view('pet-shop.product-detail',[
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum,

        ]);
    }

    public function addCard(Request $request){

        $product = Product::query()->where(['id' => $request->id])->first();

        $sessionId = session()->getId();


        \Cart::session($sessionId)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes'=> [
                'image' => $product->image,
            ],
        ));

        $cart = \Cart::getContent();

        return redirect()->back();


    }

    public function contact(){
        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');

        return view('pet-shop.contact',
        [
            'cart' => $cart,
            'sum' => $sum,

        ]);

    }

    public function profile(){



        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');

        return view('pet-shop.profile',
        [
            'cart' => $cart,
            'sum' => $sum,

        ]);

    }

    public function checkout(){
        $user= Auth::user();

        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');

        $messageSuccessOrder= \session('successOrder');

        $orders = Order::query()->where(['user_id' => $user->getAuthIdentifier()])->orderBy('id', 'desc')->get();

        $orders->transform(function($order){
            $order->cart_data = unserialize($order->cart_data);
  //          dd($order->cart_data);
            return $order;
        });


        if(!empty($messageSuccessOrder)){
            return view('pet-shop.checkout', [
                'cart' => $cart,
                'sum' => $sum,
                'user' => $user,
                'orders' => $orders,

            ])->with('messageSuccessOrder', $messageSuccessOrder);

        }


        return view('pet-shop.checkout', [
            'cart' => $cart,
            'sum' => $sum,
            'user' => $user,
            'orders' => $orders,


        ])->with('messageSuccessOrder', $messageSuccessOrder);
    }

    public function makeOrder(Request $request){
        $user= Auth::user();

        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');

        $order= new Order();

        $order->user_id = $user->id;
        $order->cart_data = $order->setCartDataAttribute($cart);
        $order->total_sum = $sum;
        $order->phone = $request->telephone;
        $order->address = $request->address . ' '. $request->city . ' '. $request->state . ' ' . $request->zip;

        if($order->save()){
            \Cart::clear();

            Session::flash('successOrder', 'Order was made succesfully!');

            return back();

        };

        Session::flash('errorOrder', 'Somethin went wrong...');

        return back();

    }


}
