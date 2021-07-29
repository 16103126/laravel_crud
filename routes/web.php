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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice', 'ProductController@practice');

Route::get('/user', 'UserController@index');

Route::get('/products', 'CrudController@index')->name('products.index');
Route::get('/product/create', 'CrudController@create')->name('product.create');
Route::post('/product/store', 'CrudController@store')->name('product.store');
Route::get('/product/edit/{id}', 'CrudController@edit')->name('product.edit');
Route::post('/product/update/{id}', 'CrudController@update')->name('product.update');
Route::get('/product/delete/{id}', 'CrudController@destroy')->name('product.destroy');

// Route::get('product/edit/{id}', function(){
//     return 'ok';
// })->name('product.edit');