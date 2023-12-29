<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        $products = Product::all();
        $mouseProducts = Product::where('kategori', 'mouse')->get();
        $keyboardProducts = Product::where('kategori', 'keyboard')->get();
        $headsetProducts = Product::where('kategori', 'headset')->get();
        return view('welcome',compact('products', 'mouseProducts','headsetProducts', 'keyboardProducts'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('detail',compact(['product']));
    }


}