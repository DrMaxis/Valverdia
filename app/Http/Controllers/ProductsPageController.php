<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Category;

class ProductsPageController extends Controller
{
    public function index() {

        if(request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', request()->category);
            })->get();
            $categories = Category::all();
            $colors = Color::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
            $data = array('products' => $products, 'categories' => $categories, 'colors' => $colors, 'categoryName' => $categoryName);
        } else {
        $products = Product::all();
        $categories = Category::all();
        $colors = Color::all();
        $categoryName = 'Featured';
        $data = array('products' => $products, 'categories' => $categories, 'colors' => $colors, 'categoryName' => $categoryName );
        }

        
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
