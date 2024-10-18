<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
     public function index()
    {
        $products = Product::all();
        return view('website.pages.shop',['products'=> $products]);
    }
}
