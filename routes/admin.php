<?php

CRUD::resource('tbltype', 'TblTypeCrudController');
CRUD::resource('tblcategory', 'TblCategoryCrudController');
CRUD::resource('tblproduct', 'TblProductCrudController');
CRUD::resource('tblposition', 'TblPositionCrudController');
CRUD::resource('tblpostjob', 'TblPostJobCrudController');
CRUD::resource('tblapplyjob', 'TblApplyJobCrudController');
Route::get('apply-job-detail', 'TblApplyJobCrudController@applyJobHistory');
CRUD::resource('tblcardcategory', 'TblCardCategoryCrudController');
CRUD::resource('tblcard', 'TblCardCrudController');

CRUD::resource('admin-user', 'AdminUserCrudController');
CRUD::resource('tblpromotion', 'TblPromotionCrudController');

CRUD::resource('customer', 'CustomerCrudController');
Route::any('customer/change-pass','CustomerCrudController@changePass');
Route::patch('customer/change-pass','CustomerCrudController@changePassSave');
Route::get('ajax-customer-phone', 'CustomerCrudController@getPhones');
Route::get('ajax-customer-name', 'CustomerCrudController@getName');
Route::get('api/customer', 'CustomerCrudController@index2');
Route::get('api/customer/{id}', 'CustomerCrudController@show2');

CRUD::resource('tblorder', 'TblOrderCrudController');
//    ================ order report=========
Route::get('all-order','TblOrderCrudController@allOrder');
Route::get('all-order/data','TblOrderCrudController@allOrderData');

Route::get('new-order','TblOrderCrudController@newOrder');
Route::get('/new-order/data','TblOrderCrudController@newOrderData');

Route::get('paid-order','TblOrderCrudController@paidOrder');
Route::get('/paid-order/data','TblOrderCrudController@paidOrderData');

Route::get('cancel-order','TblOrderCrudController@cancelOrder');
Route::get('/cancel-order/data','TblOrderCrudController@cancelOrderData');

Route::get('/order-detail/{id?}','TblOrderCrudController@orderDetail');

Route::post('post-cancel','TblOrderCrudController@postCancel');
Route::post('post-paid','TblOrderCrudController@postPaid');
Route::post('post-uncancel','TblOrderCrudController@postUncancel');
Route::post('post-unpaid','TblOrderCrudController@postUnpaid');

Route::get('load-order-notification','TblOrderCrudController@loadOrderNotification');
//================end order report=========