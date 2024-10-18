<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\{Order,Product};
use Illuminate\Http\Request;

class MainController extends Controller
{
     public function home()
    {
        $products =  Product::take(3)->get();
        return view('website.pages.home',['products'=>  $products]);
    }
    public function welcome()
    {
        return view('welcome');
    }

     public function contact()
    {
        return view('website.pages.contact');
    }

    public function store(Request $request){
        $request->validate([
            'name'    =>  'required',
            'email'   =>  'required|email',
            'phone'   =>  'required',
            'address' =>  'required',
            'city'    =>  'required',
            'order'   =>  'required',
        ]);

        $order  = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->city =  $request->city;
        $order->order = $request->order;
        $order->user_id =  auth()->user()->id;
        $order->save();

        return to_route('shop');
    }
    public function about()
    {
        return view('website.pages.about');
    }
    public function services()
    {
        return view('website.pages.services');
    }
}
