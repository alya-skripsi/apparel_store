<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use app\Models\Cart;



class CheckoutController extends Controller
{
    public function index(){
        return view('checkout.index',[
            'title' => 'Checkout',
            'active' => 'checkout'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required|numeric',
            'courier' => 'required',
            'payment' => 'required'
        ]);

        $order = Order::create([
            'user_id' => auth()->id(),
            'status' => 'pending',
            'total_price' => Cart::session(auth()->id())->getTotal()
        ]);

        foreach(Cart::session(auth()->id())->getContent() as $item){
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'price' => $item->getPrice()
            ]);
        }

        Cart::session(auth()->id())->clear();

        return redirect('/')->with('success', 'Order has been placed successfully');
    }
}
