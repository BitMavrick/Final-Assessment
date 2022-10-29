<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;

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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('frontend.index');
    })->name('home');

    Route::get('/details', function () {
        return view('frontend.details');
    })->name('details');

    Route::get('/admin', [UserController::class, 'index'])->name('admin');
    Route::get('/admin/product', [productController::class, 'index'])->name('product');
    Route::get('/admin/product/create', [productController::class, 'create'])->name('product.create');
    Route::post('/admin/product/store', [productController::class, 'store'])->name('product.store');
    Route::get('/admin/product/{id}/edit', [productController::class, 'edit'])->name('product.edit');
    Route::patch('/admin/product/{id}/update', [productController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{id}/destroy', [productController::class, 'delete'])->name('product.destroy');
});