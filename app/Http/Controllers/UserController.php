<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();

        return view('order.index', compact('orders'));

    }

    public function view(Order $order)
    {
        $order = Order::where('id', $order->id)->first();
        return view('order.view', compact('order'));
    }
}
