<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {   
        $wishlist = Wishlist::where('user_id', auth()->id())->get();


        return view('wishlist.index', [
            'title' => 'Wishlist',
            'active' => 'wishlist',
            'wishlist' => $wishlist
        ]);
    }

    public function store(Product $product)
    {
        Wishlist::updateOrCreate([
            'product_id' => $product->id,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('wishlist.index');
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return redirect()->route('wishlist.index');
    }
}
