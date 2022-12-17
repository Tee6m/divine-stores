<?php

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

// Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('search', 'App\Http\Controllers\PageController@search');
//Route::get('product-list', 'App\Http\Controllers\PageController@productlistAjax');

Route::get('/autocomplete', [App\Http\Controllers\PageController::class, 'autocomplete'])->name('autocomplete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');

//Route::get('close', 'App\Http\Controllers\PageController@close');

Route::get('admin','App\Http\Controllers\pageController@admin');
Route::get('profile','App\Http\Controllers\pageController@profile');

Route::get('terms','App\Http\Controllers\pageController@about');

// This is used for authenticating the user before taking them to the url they input
Route::group(['middleware' => ['auth']], function() { 
    //Put here if you dont want someone to get access without login.



    
    Route::get('account','App\Http\Controllers\AccountController@index');
    Route::get('dash','App\Http\Controllers\AccountController@dashboard');
    Route::get('inbox','App\Http\Controllers\AccountController@inbox');

    Route::get('settings','App\Http\Controllers\AccountController@index2');


    // CHANGE_PASSWORD & PROFILE_UPDATE  ROUTES
Route::post('change_password','App\Http\Controllers\AccountController@change_password');
Route::post('profile_update','App\Http\Controllers\ProfileController@update');
Route::post('profile_update2','App\Http\Controllers\ProfileController@update2');
Route::post('profile_update3','App\Http\Controllers\ProfileController@admin_update');

// profile picture
Route::post('profilePicture','App\Http\Controllers\ProfilePictureController@profile_pic');
Route::post('/profilePicture/edit/{id}','App\Http\Controllers\ProfilePictureController@profile_pic_update');


//Category ROUTES.........
Route::get('categories/all', 'App\Http\Controllers\CategoryController@all');
Route::get('categories/create', 'App\Http\Controllers\CategoryController@create');
Route::post('categories/create', 'App\Http\Controllers\CategoryController@store');
Route::get('/category/{url}', 'App\Http\Controllers\CategoryController@show'); 
Route::get('/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit');
//Route::get('/categories/edit/{category}', 'App\Http\Controllers\CategoryController@edit');
Route::post('/categories/edit/{id}', 'App\Http\Controllers\CategoryController@update');
Route::get('/categories/delete/{id}', 'App\Http\Controllers\CategoryController@destroy');

//Products Routes
Route::get('products/all', 'App\Http\Controllers\ProductController@all');
Route::get('products/create', 'App\Http\Controllers\ProductController@create');
Route::post('products/create', 'App\Http\Controllers\ProductController@store');
Route::get('/product/{url}', 'App\Http\Controllers\ProductController@show');
Route::get('/products/edit/{id}', 'App\Http\Controllers\ProductController@edit');
Route::post('/products/edit/{id}', 'App\Http\Controllers\ProductController@update');
Route::get('/products/delete/{id}', 'App\Http\Controllers\ProductController@destroy');

//contact Routes
Route::get('contact', 'App\Http\Controllers\ContactController@create');
Route::post('contact', 'App\Http\Controllers\ContactController@store');





//Dashboard Routes
Route::get('total_users', 'App\Http\Controllers\DashboardController@total_users');
// Route::get('total_products', 'App\Http\Controllers\DashboardController@total_products');
// Route::get('total_categories', 'App\Http\Controllers\DashboardController@total_categories');
Route::get('pending_orders', 'App\Http\Controllers\DashboardController@pending_orders');
Route::get('completed_orders', 'App\Http\Controllers\DashboardController@completed_orders');
Route::get('total_orders', 'App\Http\Controllers\DashboardController@total_orders');




Route::get('shop', 'App\Http\Controllers\ProductController@shop');


Route::get('home_display', 'App\Http\Controllers\DisplayController@view');
Route::post('logo_change', 'App\Http\Controllers\DisplayController@logo');
Route::post('site_name', 'App\Http\Controllers\DisplayController@name');
Route::post('slider_update', 'App\Http\Controllers\DisplayController@slider_text');



//Put here if you dont want someone to get access without login.

});

// Route::group(['middleware' => ['auth']], function() {   

// });


// CartController
Route::get('product/cart/{id}', 'App\Http\Controllers\CartController@add');
Route::get('cart/counter', 'App\Http\Controllers\CartController@count');
Route::get('product/cart/{id}/{qty}', 'App\Http\Controllers\CartController@add_with_qty');
Route::get('cart_table', 'App\Http\Controllers\CartController@cart_table');
Route::get('cart_table/{rowId}/{qty}', 'App\Http\Controllers\CartController@cart_table_update');
Route::get('remove_cart_item/{rowId}', 'App\Http\Controllers\CartController@remove_cart_item');
Route::get('cart', 'App\Http\Controllers\CartController@index');

//checkout
Route::get('checkout', 'App\Http\Controllers\CheckoutController@index');

Route::post('/pay', 'App\Http\Controllers\PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'App\Http\Controllers\PaymentController@handleGatewayCallback');
Route::get('invoice/{batch_code}', 'App\Http\Controllers\PaymentController@invoice');
