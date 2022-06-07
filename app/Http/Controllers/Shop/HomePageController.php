<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomePageController extends Controller
{
    public function index()
    {

        $products = Product::all();

        return view('shop.homePage')->with('products', $products);
    }
}
