<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.index');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('backend.index');

Route::resource('/dashboard/category', 'App\Http\Controllers\ProductCategoryController');
Route::resource('/dashboard/product', 'App\Http\Controllers\ProductController');
Route::resource('/dashboard/productImage', 'App\Http\Controllers\ProductImageController');
Route::resource('/dashboard/contact', 'App\Http\Controllers\ContactController');
Route::resource('/dashboard/payment', 'App\Http\Controllers\PaymentController');
Route::resource('/dashboard/contactForm', 'App\Http\Controllers\ContactFormController');
Route::resource('/dashboard/customerDetail', 'App\Http\Controllers\CustomerDetailController');

