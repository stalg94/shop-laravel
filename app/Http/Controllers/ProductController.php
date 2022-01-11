<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function shoplist(){

        $products = Product::all();

        return view('pet-shop\shop-food',[
            'products' => $products,
        ]);
    }
}
