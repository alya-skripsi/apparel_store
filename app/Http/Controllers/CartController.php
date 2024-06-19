<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->get();
        $subtotal = $cart->sum(function ($item) {
            return (int)$item->product->price * (int)$item->quantity;
        });

        return view('cart.index', [
            'title' => 'Cart',
            'active' => 'cart',
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

        return redirect()->route('cart.index');
    }

    public function changeQty(Request $request, Cart $cart)
    {
        $cart->update([
            'quantity' => $request->qty
        ]);

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index');
    }
}
