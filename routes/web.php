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

Route::get('/lang/{l}', function ($l) {
    $arr_lang = ['en', 'km'];
    $la = in_array($l, $arr_lang) ? $l : 'en';
    //session(['sess_lang' => $la]);
    Session::put('lion.language_locale', $la);

    return redirect()->back();
});

// ==============frontend======
Route::get('/','MsController@home');
Route::get('/home','MsController@home');
//=============resturant===============
Route::get('/menu/restaurant', 'MsController@menuRestaurant');
Route::get('/item/restaurant', 'MsController@itemRestaurant');

//==============delivery==============
Route::get('/menu/delivery', 'MsController@menuDelivery');
Route::get('/item/delivery', 'MsController@itemDelivery');

Route::get('/map','MsController@map');
Route::get('/about','MsController@about');
Route::get('/career','MsController@career');
Route::post('/post-apply-job', 'MsController@postApplyJob');

Route::get('/concept','MsController@concept');
Route::get('/branch','MsController@branch');
Route::get('/contact','MsController@contact');
Route::post('/post/contact','MsController@postContact');
Route::get('/copyright','MsController@copyright');
Route::get('/feedback','MsController@feedback');

Route::get('/promotion','MsController@promotion');
Route::get('/promotion/detail/{id}','MsController@promotionDetail');

Route::get('/card','MsController@card');
Route::get('/card/detail/{id}','MsController@cardDetail');

//===================shopping card===============
Route::get('/add-cart','MsController@addCart');
Route::get('/get-cart','MsController@getCart');
Route::get('/remove-cart','MsController@removeCart');
Route::get('/update-cart','MsController@updateCart');
Route::get('/update-cart1','MsController@updateCart1');
Route::get('/destroy-cart','MsController@destroyCart');
Route::get('/total-qty','MsController@totalQty');
//===================end shopping cart===========


//===================customer card===============
Route::get('/login', 'CustomerController@customerLogin');
Route::post('/login', 'CustomerController@postCustomerLogin');

Route::get('/register', 'CustomerController@customerRegister');
Route::get('/forgot-password', 'CustomerController@forgotPassword');
Route::post('/logout', 'CustomerController@postLogout');

Route::group(['prefix' => 'customer', 'middleware' => 'customer'], function () {
    Route::get('/register-success', 'CustomerController@customerRegisterSuccess');
    Route::get('/checkout/{id?}', 'CustomerController@customerCheckout');
    Route::post('/checkout', 'CustomerController@postCustomerCheckout');
    Route::get('/checkout-success', 'CustomerController@checkoutSuccess');
    Route::get('/order-info/{id?}', 'CustomerController@OrderInfo');
    Route::get('/repeat-order/{id?}/{customer_id?}', 'CustomerController@repeatOrder');
    Route::get('/your-order', 'CustomerController@yourOrder');
    Route::get('/profile', 'CustomerController@yourProfile');
    Route::post('/post-profile', 'CustomerController@postProfile');

    Route::get('/address-book', 'CustomerController@addressBook');
    Route::post('/post-address-book', 'CustomerController@postAddressBook');

    //===================end customer card===============

    Route::post('/update-customer-info', 'CustomerController@editCustomerInfo');


});



