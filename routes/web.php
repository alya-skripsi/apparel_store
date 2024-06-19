<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
        'active' => 'home'
    ]);
});

// About
Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'active' => 'about'
    ]);
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/registration', [RegistController::class, 'index'])->name('registration')->middleware('guest');
Route::post('/registration', [RegistController::class, 'store']);

// Product
Route::get('/products', [ProductController::class, 'index']);
Route::get('products/{product:slug}', [ProductController::class, 'show']);

// Categories
Route::get('/categories', function () {
    return view('categories',[
        'title' => 'Product Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('products',[
        'title' => "Product catergory : $category->name",
        'active' => 'categories',
        'products' => $category->products->load('category'),
    ]);
    
});

// Wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->middleware('auth')->name('wishlist.index');
Route::post('/wishlist/add/{product:slug}', [WishlistController::class, 'store'])->middleware('auth');
Route::delete('/wishlist/{wishlist:id}', [WishlistController::class, 'destroy'])->middleware('auth');

// Cart
Route::get('/cart', [CartController::class, 'index'])->middleware('auth')->name('cart.index');
Route::post('/cart/add/{product:slug}', [CartController::class, 'store'])->middleware('auth');
Route::delete('/cart/{cart:id}', [CartController::class, 'destroy'])->middleware('auth');
Route::post('/cart/change-qty/{cart:id}', [CartController::class, 'changeQty'])->middleware('auth');

// Setting


// Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');
Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');
Route::get('/dashboard/products/checkSlug', [DashboardProductController::class, 'checkSlug'])->middleware('auth');

// Checkout
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
});




