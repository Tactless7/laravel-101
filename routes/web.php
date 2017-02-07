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

Route::get('/', 'ProductController@getAll')->name('home');

Route::get('/show/{id}', 'ProductController@getIndex');

Route::post('/sell/{id}', 'ProductController@sell');

Route::post('/restock/{id}', 'ProductController@restock');

Route::get('/add', function(){
  return view('product.add');
});

Route::post('/add', 'ProductController@add');

Route::get('/del/{id}', 'ProductController@delete');

Route::get('/edit/{id}', function($id){
  $product = \App\Product::find($id);
  return view('product.edit', ['product' => $product]);
});

Route::post('/edit/{id}', 'ProductController@edit');
