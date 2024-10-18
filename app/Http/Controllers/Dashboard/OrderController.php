<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public  function index(){
        $orders =  Order::latest()->paginate(5);
        return view('dashbaord.pages.orders.index',['orders'=>$orders]);
    }
}
