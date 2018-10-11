<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Categories;

class ProductsPageController extends Controller
{
    public function index() {
        $colors = Color::all();
        $products = Product::all();
        $data = array('colors' => $colors, 'products' => $products);
        return view('products')->with($data);
        
    }



    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $popular = Product::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();
        return view('singleProduct')->with([
            'product' => $product,
            'popular' => $popular,
            ]);
    }
}
