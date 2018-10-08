<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Categories;

class ProductsPageController extends Controller
{
    public function index() {
        return view('leds');
    }
}
