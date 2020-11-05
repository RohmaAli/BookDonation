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
Route::get('/books', 'AdminController@books')->name('books');
Route::get('/slider', 'AdminController@slider')->name('slider');
Route::get('/user', 'AdminController@user')->name('user');


Route::get('notes', 'NotesController@index');
 Route::get('pdf', 'NotesController@pdf');