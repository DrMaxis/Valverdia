<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Product;
use App\Color;

class TestPageController extends Controller
{
   public function index() {
    $colors = Color::all();
    $products = Product::all();
    $data = array('colors' => $colors, 'products' => $products);
    return view('test')->with($data);
   }
}
