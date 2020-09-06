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
Route::get('/myorder/{id}','FrontendController@myorder')->name('myorder')->middleware('auth');
Route::get('/orderDetail/{id}','FrontendController@orderDetail')->name('orderDetail')->middleware('auth');
Route::get('products','FrontendController@products')->name('products');
Route::get('detail/{id}','FrontendController@detail')->name('detail');
// Route::get('itemdetail/{id}','FrontendController@itemdetail')->name('itemdetail');
Route::get('brand/{id}','FrontendController@brand')->name('brand');
Route::get('volume/{id}','FrontendController@volume')->name('volume');
Route::get('region/{id}','FrontendController@region')->name('region');

Route::get('/','FrontendController@index')->name('index');
Route::get('contact','FrontendController@contact')->name('contact');
Route::get('about','FrontendController@about')->name('about');
Route::get('shoppingcart','FrontendController@shoppingcart')->name('shoppingcart');
Route::post('order','FrontendController@order')->name('order')->middleware('auth');

Route::get('ordersuccess','FrontendController@ordersuccess')->name('ordersuccess');


Route::group(['middleware'=>['role:admin','auth']],function(){

Route::get('/confirm/{id}','FrontendController@confirm')->name('confirm');

Route::get('/cancel/{id}','FrontendController@cancel')->name('cancel');
});




Route::group(['prefix'=>'backside','as'=>'backside.','middleware'=>['role:admin','auth']],function(){

Route::resource('/category','CategoryController');

Route::resource('/subcategory','SubcategoryController');

Route::resource('/brand','BrandController');

Route::resource('/item','ItemController');

// Route::resource('/township','TownshipController');

Route::resource('/volume','VolumeController');

Route::resource('/region','RegionController');
Route::resource('/order','OrderController');




});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
