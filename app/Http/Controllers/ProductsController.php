<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($id){
        $product = Product::find($id);
        return view('product-page',['product'=>$product]);

    }
    public function index(){
        $products = Product::latest()->get();
        return view('all-products',['products'=>$products]);
    }

    public function create(){
        // $products = Product::latest()->get();
        return view('product-new');
    }

    public function store(){
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'label'=>'required'
        ]);

        // dump(request()->all());
        $product = new Product();
        $product -> title = request('title');
        $product -> description = request('description');
        $product -> price = request('price');
        $product -> label = request('label');
        $product -> save();
        return redirect ('product-new-success');
    }

    public function edit($id){
        // $products = Product::latest()->get();
        $product = Product::find($id);
        return view('product-edit',['product'=>$product]);
    }

    public function update($id){
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'label'=>'required'
        ]);

        // $products = Product::latest()->get();
        $product = Product::find($id);
        $product -> title = request('title');
        $product -> description = request('description');
        $product -> price = request('price');
        $product -> label = request('label');
        $product -> save();
        return redirect ('product-new-success');
    }

}
