<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\GraphQLController;

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

Route::get('/data', [GraphQLController::class, 'index']);

Route::prefix('/products')->group( function () {
    Route::post('/add', [ProductController::class, 'store'])->name('products.store');
});