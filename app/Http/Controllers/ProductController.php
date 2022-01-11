<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Darryldecode\Cart\CartServiceProvider;

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
        $randProducts = Product::query()->inRandomOrder()->get();

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

        return view('pet-shop/contact',
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

        return view('pet-shop/profile',
        [
            'cart' => $cart,
            'sum' => $sum,

        ]);

    }


}
