<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
