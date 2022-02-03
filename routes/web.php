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
    return view('guest.prova');
})->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index');


/* crud products */
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/dash', 'ProductController@dashboard')->name('products.dashboard');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::post('/products/store', 'ProductController@store')->name('product.store');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.destroy');



/* crud posts */
Route::get('/posts/blog', 'PostController@blog')->name('posts.blog');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/dash', 'PostController@dashboard')->name('posts.dashboard');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::post('/posts/store', 'PostController@store')->name('post.store');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::put('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.destroy');




/* TAGS */
Route::get('/tag/{tag}', 'TagController@index')->name('tag.index');


/* Contacts */
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::post('/contacts', 'ContactController@sendMail')->name('contact.mail');
Route::get('/contacts/dash', 'ContactController@dashboard')->name('contacts.dashboard');
Route::get('/contacts/{contact}', 'ContactController@show')->name('contact.show');
Route::delete('/contacts/{contact}', 'ContactController@destroy')->name('contact.destroy');
