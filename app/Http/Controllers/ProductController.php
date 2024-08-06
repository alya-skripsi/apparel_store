<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('products',[
            'title' => 'All Products',
            'active' => 'products',
            'categories' => $categories,
            'category' => Category::firstWhere('slug', request('category')),
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(8)->withQueryString()
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
