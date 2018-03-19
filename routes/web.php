<?php

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

Auth::routes();


Route::get('/admin', function () {
    return redirect(route('dashboard'));
});

Route::group(['middleware'=>'auth'],function (){
    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */
    Route::get('dashboard','HomeController@index')->name('dashboard');

});

    Route::resource('supplier', 'SupplierController');
    Route::resource('category', 'categoryController');
    Route::resource('shipper', 'shipperController');
    Route::resource('payment', 'paymentController');
    Route::resource('product', 'productController');
    Route::resource('customer', 'customerController');
    Route::resource('order', 'orderController');


// Front-End
Route::resource('', 'frontend\landingController');

// ========
Route::group(['prefix' => '/member'], function() {
    Route::get('/m', 'memberController@index')->name('member.home');
    Route::get('/loginM', 'AuthMember\LoginController@showLoginForm')->name('member.login');
    Route::post('/loginM', 'AuthMember\LoginController@login')->name('member.login.submit');
});

Route::get('/registerM', 'AuthMember\RegisterController@showRegisForm')->name('member.register');
Route::post('/registerM', 'AuthMember\RegisterController@register')->name('member.register.submit');

Route::any('aa', function () {
    return view('frontend.partials.header');
});