<?php

use App\Http\Controllers\backend\AttributesController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\GeneralSettingController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\MetaManagementController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
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

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {


    //dashboard
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard.bashboard');
    })->middleware(['verified'])->name('dashboard');



    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Order
    Route::prefix('orders')->name('orders.')->group(function () {

        Route::get('list', [OrderController::class, 'index'])->name('list');
        Route::get('details', [OrderController::class, 'details'])->name('details');
        Route::get('cart', [OrderController::class, 'cart'])->name('cart');
        Route::get('cheakout', [OrderController::class, 'cheakout'])->name('cheakout');
    });

    // Product
    Route::prefix('products')->name('products.')->group(function () {

        Route::get('list', [ProductController::class, 'index'])->name('list');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::get('image/delete/{id}', [ProductController::class, 'imageDelete'])->name('image.delete');
    });

    // Category
    Route::prefix('category')->name('category.')->group(function () {

        Route::get('list', [CategoryController::class, 'index'])->name('list');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    // attributes
    Route::prefix('attributes')->name('attributes.')->group(function () {

        Route::get('list', [AttributesController::class, 'index'])->name('list');
        Route::get('create', [AttributesController::class, 'create'])->name('create');
        Route::post('store', [AttributesController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AttributesController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [AttributesController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [AttributesController::class, 'destroy'])->name('destroy');
    });

    // Profile
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('list', [ProfileController::class, 'index'])->name('list');
        Route::get('create', [ProfileController::class, 'create'])->name('create');
        Route::post('store', [ProfileController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ProfileController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [ProfileController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // FAQS
    Route::prefix('faq')->name('faq.')->group(function () {
        Route::get('list', [FaqController::class, 'index'])->name('list');
        Route::get('create', [FaqController::class, 'create'])->name('create');
        Route::post('store', [FaqController::class, 'store'])->name('store');
        Route::get('edit/{id}', [FaqController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [FaqController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [FaqController::class, 'destroy'])->name('destroy');
    });

    // Brand
    Route::prefix('brand')->name('brand.')->group(function () {
        Route::get('list', [BrandController::class, 'index'])->name('list');
        Route::get('create', [BrandController::class, 'create'])->name('create');
        Route::post('store', [BrandController::class, 'store'])->name('store');
        Route::get('edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [BrandController::class, 'update'])->name('update');
        Route::get('destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
    });

    // Settings Section----------------------------------------------
    Route::prefix('settings')->name('settings.')->group(function () {

        // General Settings
        Route::prefix('general')->name('general.')->group(function () {
            Route::get('list', [GeneralSettingController::class, 'index'])->name('list');
            Route::post('update', [GeneralSettingController::class, 'update'])->name('update');
        });
        // Custom Codes
        Route::prefix('custom')->name('custom.')->group(function () {
            Route::get('list', [MetaManagementController::class, 'index'])->name('list');
            Route::post('update', [MetaManagementController::class, 'update'])->name('update');
        });
        // Custom Codes
        Route::prefix('slider')->name('slider.')->group(function () {
            Route::get('list', [SliderController::class, 'index'])->name('list');
            Route::get('create', [SliderController::class, 'create'])->name('create');
            Route::post('store', [SliderController::class, 'store'])->name('store');
            Route::get('edit/{id}', [SliderController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [SliderController::class, 'update'])->name('update');
            Route::get('destroy/{id}', [SliderController::class, 'destroy'])->name('destroy');
        });
    });





    //test Route
    Route::any('test', [TestController::class, 'index'])->name('test');
    Route::any('store', [TestController::class, 'store'])->name('store');



    Route::fallback(function () {
        return redirect()->back();
    });
});
