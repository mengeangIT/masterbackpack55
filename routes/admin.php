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