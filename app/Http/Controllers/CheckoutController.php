<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index(){

        $cart = Cart::where('user_id', Auth::id())->get();
        $subtotal = $cart->sum(function ($item) {
            return (int)$item->product->price * (int)$item->quantity;
        });

        return view('checkout.index',[
            'title' => 'Checkout',
            'active' => 'checkout',
            'carts' => $cart,
            'subtotal' => $subtotal
        ]);
    }

    public function store(Request $request, Product $product)
    {
        $cart = Cart::updateOrCreate(
            [
                'product_id' => $product->id,
                'user_id' => Auth::id()
            ],
            [
                'quantity' => $request->qty
            ]
        );

        return redirect()->route('checkout.index');
    }

    public function placeOrder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->no_hp = $request->input('no_hp');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('city');
        $order->province = $request->input('province');
        $order->tracking_number = 'TRX'.rand(1000,9999);
        $order->save();

        $order->id;

        $subtotal = 0;
        $cartItems_total = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems_total as $item) {
            $subtotal += $item->product->price * $item->quantity;
        }

        $order->subtotal = $subtotal;
        $order->update();

        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price
            ]);

            $product = Product::where('id', $item->product_id)->first();
            $product->stock = $product->stock - $item->quantity;
            $product->update();
        }

        if(Auth::user()->address == null){
            $user = User::where('id', Auth::id())->first();
            $user->name = $user->name;
            $user->email = $request->input('email');
            $user->no_hp = $request->input('no_hp');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->city = $request->input('city');
            $user->province = $request->input('province');
            $user->update();
        }

        $cartItems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartItems);

        return redirect('/')->with('success', 'Order has been placed!');
    }
}
