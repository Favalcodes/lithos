<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
// use PayPalCheckoutSdk\Core\PayPalHttpClient;
// use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

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

//store
Route::get("/products", 
        [
            "uses"=> "App\Http\Controllers\StoreController@productsPage",
            "as"=>"products"
        ]
    );

Route::get("/product/{product_id}", [
    "uses"=>"App\Http\Controllers\StoreController@productPage",
    "as"=>"product"
    ]);
    
    Route::post("/register", 
    [
        "uses"=> "App\Http\Controllers\StoreController@userRegister",
        "as"=>"register"
    ]
);

Route::post("/login", 
        [
            "uses"=> "App\Http\Controllers\StoreController@userAuth",
            "as"=>"login"
        ]
    );


Route::get("/cart",
    [
        "uses"=> "App\Http\Controllers\cartController@index",
        "as"=>"cart"
    ]
);

Route::get("/account", function(){
    return view("website.frontend.store.account");
});

Route::get("/contact", function(){
    return view("website.frontend.layouts.contact");
});

Route::get("/about", function(){
    return view("website.frontend.layouts.about");
});
Route::get("/test/products","App\Http\Controllers\StoreController@productsPage" );

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Admin Login
Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/register', [App\Http\Controllers\AdminController::class, 'postRegister'])->name('admin.register');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'postLogin'])->name('admin.login');
Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'logOut'])->name('admin.logout');
//dashboard
Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('backend.index')->middleware('auth:admin');

Route::resource('/dashboard/category', 'App\Http\Controllers\ProductCategoryController');
Route::resource('/dashboard/product', 'App\Http\Controllers\ProductController');
Route::resource('/dashboard/productImage', 'App\Http\Controllers\ProductImageController');
Route::resource('/dashboard/contact', 'App\Http\Controllers\ContactController');
Route::resource('/dashboard/payment', 'App\Http\Controllers\PaymentController');
Route::resource('/dashboard/contactForm', 'App\Http\Controllers\ContactFormController');
Route::resource('/dashboard/customerDetail', 'App\Http\Controllers\CustomerDetailController');

//paypal route.
Route::get("/home", function(){
    return view("welcome");
});

Route::post("/order", );

Route::post("/payment", function(){
    return "payment working";
});





