<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\PaymentCallbackController;

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

// Dashboard
Route::middleware(['auth', 'admin'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    });
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('products', DashboardProductController::class);
    Route::resource('orders',DashboardOrderController::class);
    Route::get('user-profile',[DashboardProfileController::class, 'index']);
});

// Checkout
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('/provinces', [CheckoutController::class, 'getProvinces']);
    Route::get('/cities/{provinceId}', [CheckoutController::class, 'getCities']);
    Route::post('/cost', [CheckoutController::class, 'getCost']);
});

// Order
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{order:id}', [OrderController::class, 'show'])->name('orders.show');
Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');


// Callback midtrans
Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);

// Profile
Route::middleware(['auth'])->group(function () {
    // User Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});






