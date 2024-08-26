<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        abort_if(auth()->user() == null, 401, "شما به سیستم وارد نشده اید");
        $orders = auth()->user()->orders;
        //TODO: return view to show list of orders
    }
    public function show(Order $order)
    {
        $order = $order->with("items");
        //TODO: show details of order
    }
}
