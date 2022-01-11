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

    public function shopindex(){
        $randProducts = Product::query()->inRandomOrder()->get();

        $product = Product::query()->select()->inRandomOrder()->limit(1)->get();

        return view('pet-shop\index',[
            'randProducts' => $randProducts,
            'product' => $product,
        ]);
    }

    public function productDetails(Request $request){

        $product = Product::query()->where(['id' => $request->id])->get();
        return view('pet-shop.product-detail',[
            'product' => $product,
        ]);
    }


}
