<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('CRUD.index',compact(['products']));
    }

    public function create(){
        return view('CRUD.create');
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect('/CRUD');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('CRUD.edit',compact(['product']));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/CRUD');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/CRUD');
    }
}
