<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        return view('products',[
            'title' => 'All Products',
            'active' => 'products',
            'products' => Product::latest()->filter(request(['search']))->paginate(8)->withQueryString()
        ]);
    }

    public function show(Product $product){
        return view('product-detail',[
            'title' => 'Product Detail',
            'active' => 'products',
            'product' => $product
        ]);
    }
}
