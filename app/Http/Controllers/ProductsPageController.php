<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use App\Color;
use App\Category;

class ProductsPageController extends Controller
{
    public function index() {
        $categories = Category::all();
        $colors = Color::all();
        if(request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', request()->category);
            })->get();
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
           
            
        } else {
        $products = Product::inRandomOrder()->take(8)->get();
        $categoryName = 'High Quality LED Lights';
        
        }

        if(request()->sort == 'low_high') {
            $products = $products->sortBy('price');
        } elseif (request()->sort == 'high_low') {
            $products = $products->sortByDesc('price');
        }

        
        return view('products')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'discount' => $this->getData()->get('discount'),
            'newSubtotal' => $this->getData()->get('newSubtotal'),
            'newTax' => $this->getData()->get('newTax'),
            'newTotal' => $this->getData()->get('newTotal'),
        ]);
    }



    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $popular = Product::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();
        return view('singleProduct')->with([
            'product' => $product,
            'popular' => $popular,
            'discount' => $this->getData()->get('discount'),
            'newSubtotal' => $this->getData()->get('newSubtotal'),
            'newTax' => $this->getData()->get('newTax'),
            'newTotal' => $this->getData()->get('newTotal'),
            ]);
    }

    private function getData() {
        $subtotal = convertToUSD(Cart::subtotal());
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = ($subtotal - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
       return collect([
           'discount' => $discount,
           'newSubtotal' => $newSubtotal,
           'newTax' => $newTax,
           'newTotal' => $newTotal,
       ]);
    }
}
