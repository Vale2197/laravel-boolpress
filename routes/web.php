<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
})->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index');


/* /crud products */
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/dash', 'ProductController@dashboard')->name('products.dashboard');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::post('/products/store', 'ProductController@store')->name('product.store');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.destroy');

