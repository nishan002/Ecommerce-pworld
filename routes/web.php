<?php

Route::get('/','backend\MainController@index')->name('main');

Route::get('/product/index','backend\ProductController@index')->name('product.index');
Route::get('/product/add','backend\ProductController@create')->name('product.add');
Route::post('/product/store','backend\ProductController@store')->name('product.store');

Route::get('/order','backend\OrderController@index')->name('order_page');

//category
Route::get('/category/index','backend\CategoryController@index')->name('category.index');
Route::get('/category/add','backend\CategoryController@create')->name('category.add');
Route::post('/category_store','backend\CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'backend\CategoryController@edit')->name('category.edit');
Route::put('/category/update/{id}', 'backend\CategoryController@update')->name('category.update');
Route::delete('category/delete/{id} ', 'backend\CategoryController@destroy')->name('category.delete');

//sub category
Route::get('subcategory/index', 'backend\SubcategoryController@index')->name('subcategory.index');
Route::get('subcategory/add', 'backend\SubcategoryController@create')->name('subcategory.add');
Route::post('/subcategory/store', 'backend\SubcategoryController@store')->name('subcategory.store');
Route::get('/subcategory/edit/{id}', 'backend\SubcategoryController@edit')->name('sub_category.edit');

//Gender
Route::get('/gender/index','backend\GenderController@index')->name('Gender.all');
Route::get('/gender/add','backend\GenderController@create')->name('Gender.add');
Route::post('/gender/store','backend\GenderController@store')->name('Gender.store');
Route::get('/gender/edit/{id}','backend\GenderController@edit')->name('gender.edit');
Route::put('/gender/update/{id}','backend\GenderController@update')->name('gender.update');

//unit meassure
Route::get('/meassure/index','backend\MeassureController@index')->name('meassure.index');
Route::get('/meassure/add','backend\MeassureController@create')->name('meassure.add');
Route::post('/meassure/store','backend\MeassureController@store')->name('meassure.store');
Route::get('/meassure/edit/{id}','backend\MeassureController@edit')->name('meassure.edit');
Route::put('/meassure/update/{id}','backend\MeassureController@update')->name('meassure.update');

//Purchases
Route::resource('/purchase','backend\PurchaseController');
Route::resource('/purchase-details','backend\PurchaseDetailsController');
Route::resource('/branch-stock','backend\BranchStockController');
