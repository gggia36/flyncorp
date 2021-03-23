<?php
Route::get('/', function () {
    return('Welcome to admin user routes.');
});

Route::get('/login', 'Admin\AuthController@login')->name('login');
Route::resource('/category', 'Admin\CategoryController');
Route::post('/category/lists', 'Admin\CategoryController@lists');

