<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
     public function index()
    {
        return view('website.pages.cart');
    }
     public function app()
    {
        return view('layouts.app');
    }
     public function show()
    {
        return view('dashbaord.pages.main');
    }
}
