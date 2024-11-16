<?php

use App\Http\Controllers\frontend\ECOrderController;
use App\Http\Controllers\frontend\websiteController;
use App\Http\Controllers\ProfileController;
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

// ---------------------------------
Route::get('/', [websiteController::class, 'index'])->name('home');
Route::get('shop', [websiteController::class, 'shop'])->name('shop');
Route::get('category/{id}', [websiteController::class, 'category'])->name('category')->where('id', '[0-9]+');
Route::get('faq', [websiteController::class, 'faq'])->name('faq');
Route::get('product-details/{id}', [ECOrderController::class, 'productDetails'])->name('product-details')->where('id', '[0-9]+');
Route::get('product-details/{id}', [ECOrderController::class, 'productDetails'])->name('product-details')->where('id', '[0-9]+');
Route::post('cheakout', [ECOrderController::class, 'cheakout'])->name('cheakout');

Route::post('complete-cheakout/{product_id}', [ECOrderController::class, 'completeCheakout'])->name('complete.cheakout')->where('product_id', '[0-9]+');

Route::get('search', [websiteController::class, 'search'])->name('search');
Route::fallback(function () {
    return redirect()->back();
});







require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
