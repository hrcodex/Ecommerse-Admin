<?php

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

Route::get('/test', function () {
    return view('welcome');
});

// ---------------------------------
Route::get('/', [websiteController::class, 'index'])->name('home');
Route::get('shop', [websiteController::class, 'shop'])->name('shop');
// ---------------------------------
// Route::get('/', function () {
//     $agent = new Agent();
//     return view('frontend.pages.home.home', ['agent' => $agent]);
// })->name('home');
// Route::get('/shop', function () {
//     return view('frontend.pages.shop.shop');
// })->name('shop');
Route::get('/product-details', function () {
    return view('frontend.pages.product_details.product-details');
})->name('product-details');
Route::get('/cheakout', function () {
    return view('frontend.pages.cheakout.cheakout');
})->name('chackout');
Route::get('/complet-buy', function () {
    return view('frontend.pages.complete_order.complete-order');
})->name('complete');
// ---------------------------------


Route::fallback(function () {
    return redirect()->back();
});







require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
