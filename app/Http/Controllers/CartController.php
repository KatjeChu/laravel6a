<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index(){
        return view('shopping-cart');
    }
    public function create(){
        //
    }
    public function store(Request $request){

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if ($duplicates -> isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message','Товар уже добавлен в вашу корзину');;
        }
        
        Cart::add($request->id, $request->title, 1, $request->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Товар добавлен в вашу корзину');
    }
    public function show($id){
       //
    }

    public function edit(){
       //
    }
    public function update(){
        //
    }
    public function destroy($id){
        Cart::remove($id);
        return back()->with('success_message','Товар удален из корзины');
    }
}