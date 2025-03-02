<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\MustBeLoginUser;
use App\Models\Order;
use Illuminate\Auth\Events\Login;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'products' => Product::paginate(4),
        'categories' => Category::paginate(3)
    ]);
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{product}', [ProductController::class, 'details']);

Route::get('/sign_up', [RegisterController::class, 'create']);
Route::post('/sign_up', [RegisterController::class, 'store']);

Route::get('/login', [RegisterController::class, 'showLogin']);
Route::post('/login', [RegisterController::class, 'login']);
Route::get('/logout', [RegisterController::class, 'logout']);

Route::get('/cart', function () {
    return view('add_to_cart');
});

Route::post('/products/{product}/addToCart', [CartController::class, 'addToCart'])->middleware(MustBeLoginUser::class);

Route::post('/products/{cartItem}/removeFromCart', [CartController::class, 'removeFromCart']);

Route::post('/products/checkout', [OrderController::class, 'order'])->middleware(MustBeLoginUser::class);

//---------------------admin routes-------------------- //
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/order_list', [OrderController::class, 'orderList']);
Route::get('/admin/customers', [AdminController::class, 'customerList']);
Route::get('/admin/inventory', [AdminController::class, 'inventory']);

Route::post('/admin/product/{product}/delete', [AdminController::class, 'removeProduct']);

Route::get('/admin/product/{product}/edit', [AdminController::class, 'showEditForm']);
Route::post('/admin/product/{product}/edit', [AdminController::class, 'updateProduct']);

Route::get('/admin/product/add', [AdminController::class, 'showAddForm']);
Route::post('/admin/product/add', [AdminController::class, 'addProduct']);
