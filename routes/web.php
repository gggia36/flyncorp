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

//---view--
Route::get('/category', 'Web\FrontWebController@show_all_category');
Route::get('/category/{id}', 'Web\FrontWebController@show_category_details');
Route::get('/category/{id}/product/{id_product}', 'Web\FrontWebController@show_category_details_product_details');

//-----date----
Route::get('/category-data/{id}', 'Web\FrontWebController@get_data_category_details');
Route::get('/product-data-other/{id}', 'Web\FrontWebController@get_data_product_all');
Route::get('/product-data/{id_product}', 'Web\FrontWebController@get_data_category_details_product_details');

// Route::get('/category/{id}/product', 'Web\FrontWebController@show_category_details_product_details');



// Route::get('/category/product/{id}', 'Web\FrontWebController@ProductDetail_show');
