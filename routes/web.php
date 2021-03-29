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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('product_category', 'ProductController@ProductCategory');
Route::get('about', 'HomeController@About');
Route::get('contact', 'HomeController@Contact');
Route::get('product', 'ProductController@Product');
Route::get('product_detail', 'ProductController@ProductDetail');


// Route::get('/category', 'Web\FrontWebController@show_all_category');



