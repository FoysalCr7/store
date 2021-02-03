<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
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

Route::get('/', [ShopController::class, 'index']);
Route::get('/dashboard', [ShopController::class, 'admin']);
Route::get('/add-product', [ShopController::class, 'productAdd'])->name('add-product');
Route::get('/manege-product', [ShopController::class, 'productManege'])->name('manege-product');
Route::get('/view-product', [ShopController::class, 'productView'])->name('view-product');
Route::post('/insert-product', [ShopController::class, 'productInsert'])->name('insert-product');
Route::get('/edit-product{id}', [ShopController::class, 'productEdit'])->name('edit-product');
Route::post('/update-product{id}', [ShopController::class, 'productUpdate'])->name('update-product');
Route::get('/delete-product{id}', [ShopController::class, 'productDelete'])->name('delete-product');
