<?php
Route::get('/', function () {
    return('Welcome to admin user routes.');
});

Route::get('/login', 'Admin\AuthController@login')->name('login');


Route::resource('category', 'Admin\CategoryController');
Route::post('/category/lists', 'Admin\CategoryController@lists');
Route::post('/category/ChangeStatus/{id}', 'Admin\CategoryController@ChangeStatus');


Route::resource('product', 'Admin\ProductController');
Route::post('/product/lists', 'Admin\ProductController@lists');
Route::post('/product/ChangeStatus/{id}', 'Admin\ProductController@ChangeStatus');


Route::post('UploadImage/{folder}','Admin\UploadFileController@UploadImage');
Route::post('UploadImageEditor/{folder}','Admin\UploadFileEditorController@UploadImage');
