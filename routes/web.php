<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/*
 * or 'HomeController@index'
 * I guess here you need the namespace
 * */
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

/* Products */
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

/* admin */
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.home.index');
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.product.index');
//Route::view('/admin', 'layouts.admin')->name('admin.home.index');

//Products Operations
Route::post('/admin/products/store', [AdminProductController::class, 'store'])
    ->name('admin.product.store');
Route::delete('/admin/products/{id}/delete/', [AdminProductController::class, 'delete'])
    ->name('admin.product.delete');
Route::get('/admin/products/{id}/edit/', [AdminProductController::class, 'edit'])
    ->name('admin.product.edit');
Route::put('/admin/products/{id}/update/', [AdminProductController::class, 'update'])
    ->name('admin.product.update');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
