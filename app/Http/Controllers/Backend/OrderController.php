<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOrdertList()
    {   $orders = Order:: with('orderDetails')->get();
        //   dd($orders);
        return view('backend.order.all-order-list',compact('orders'));
    }

    public function editOrder($id)
    {    $order = Order:: with('orderDetails')->where('id',$id)->first();
        // dd($order);
        return view('backend.order.edit-order',compact('order'));
    }
}
