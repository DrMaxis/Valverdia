<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function index() {
        return view('cart');
    }

    public function store(Request $request) {

        Cart::add($request->id, $request->name, 1, $request->price)
        ->associate('App\Product');

        return redirect()->route('cart')->with('success_message', 'Item was added to your cart!');
        
    }
}
