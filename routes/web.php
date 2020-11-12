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
//     return view('index');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/contact', 'WelcomeController@contact')->name('contact');
Route::get('/aboutus', 'WelcomeController@aboutus')->name('aboutus');
Route::get('/gallery', 'WelcomeController@gallery')->name('gallery');
Route::get('/categories', 'WelcomeController@categories')->name('categories');
Route::get('/stories', 'WelcomeController@stories')->name('stories');


//Admin Side

Route::get('/admin', 'AdminController@index')->middleware('auth')->name('admin-index');
Route::get('/mailbox', 'AdminController@mailbox')->name('mailbox');
Route::get('/category', 'AdminController@category')->name('category');
Route::get('/allBooks', 'AdminController@books')->name('allBooks');
Route::get('/slider', 'AdminController@slider')->name('slider');
Route::get('/user', 'AdminController@user')->name('user');

//book upload, download
Route::resource('books', 'BookController@create');
Route::get('books/{uuid}/download', 'BookController@download')->name('books.download');

//customer routes
Route::get('/index', 'CustomerController@index');
Route::get('/customer/dashboard', 'CustomerController@dashboard')->name('dashboard');
Route::post('/customer/delete/book', 'CustomerController@deleteBook')->name('delete');
Route::get('/customer/category', 'CustomerController@category')->name('c_category');
Route::get('/customer/myBooks', 'CustomerController@myBooks')->name('myBooks');
Route::get('/customer/create/book', 'CustomerController@create')->name('create_book');
Route::post('/customer/store/book', 'CustomerController@store')->name('store_book');

// Route::resource('/customer/create/store', 'BookController@store', ['as' => 'store']);
// Route::resource('store', 'BookController@store');

Route::get('/assignRole', function(){

});