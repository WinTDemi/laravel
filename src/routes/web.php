<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'view'])->name('home');

Route::get('/create', function () {
    return view('create-product');
});

Route::prefix('/products')->group( function () {
    Route::post('/add', [ProductController::class, 'store'])->name('products.store');
});