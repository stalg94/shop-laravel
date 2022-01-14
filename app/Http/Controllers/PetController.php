<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    //
    public function about(){
        $sessionId = session()->getId();

        \Cart::session($sessionId);


        $cart = \Cart::getContent();


        $sum = \Cart::getTotal('price');

        return view('pet-shop.about-us',[
            'cart' => $cart,
            'sum' => $sum,

        ]
    );
    }
}
