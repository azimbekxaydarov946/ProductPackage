<?php

use Illuminate\Support\Facades\Route;
use ProductMicroServices\Controllers\WebProductController;

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

Route::get('products', [WebProductController::class, 'index'])->name('web.products.index');
Route::get('products/show/{id}', [WebProductController::class, 'show'])->name('web.products.show');
Route::get('products/create', [WebProductController::class, 'create'])->name('web.products.create');
Route::post('products', [WebProductController::class, 'store'])->name('web.products.store');
Route::get('products/edit/{id}', [WebProductController::class, 'edit'])->name('web.products.edit');
Route::put('products/{id}', [WebProductController::class, 'update'])->name('web.products.update');
Route::delete('products/{id}', [WebProductController::class, 'destroy'])->name('web.products.destroy');
