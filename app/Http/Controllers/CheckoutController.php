<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        $subtotal = $carts->sum(function($cart) {
            return $cart->product->price * $cart->quantity;
        });

        return view('checkout.index', [
            'title' => 'Checkout',
            'active' => 'checkout',
            'carts' => $carts,
            'subtotal' => $subtotal,
        ]);
    }

    public function getProvinces(Request $request)
    {
        $provinces = RajaOngkir::provinsi()->all();
        return response()->json($provinces);
    }

    public function getCities(Request $request, $provinceId)
    {
        $cities = RajaOngkir::kota()->dariProvinsi($provinceId)->get();
        return response()->json($cities);
    }

    public function getCost(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 501,
            'destination'   => $request->city,
            'weight'        => 1000,
            'courier'       => $request->courier,
        ])->get();

        return response()->json($cost);
    }
}
