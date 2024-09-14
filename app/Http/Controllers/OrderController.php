<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(): void
    {
        abort_if(auth()->user() == null, 401, "شما به سیستم وارد نشده اید");
        $orders = auth()->user()->orders;
        //TODO: return view to show list of orders
    }
    public function show(Order $order): void
    {
        $order = $order->with("items");
        //TODO: show details of order
    }
    public function store(Product $product)
    {
        if($product->quantity==0)
            return redirect()->back()->withErrors("محصول در انبار موجود نیست");
        $order = Order::create(
            [
                "user_id"=>auth()->user()->id,
                "phone"=>auth()->user()->phone,
                "address"=>auth()->user()->address,
                "status"=>"پرداخت شده"
            ]

        );
        $order->items()->create([
            "product_id"=>$product->id,
            "quantity"=>1
        ]);
        $product->update(["quantity"=>$product->quantity-1]);
        return redirect()->route('index');
    }
}
