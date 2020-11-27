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
Route::middleware(['role:super_admin'])->group(function(){
Route::get('/admin', 'AdminController@index')->middleware('auth')->name('admin-index');
Route::get('/mailbox', 'AdminController@mailbox')->name('mailbox');
Route::get('/category', 'AdminController@category')->name('category');
Route::get('/allBooks', 'AdminController@books')->name('allBooks');
Route::get('/slider', 'AdminController@slider')->name('slider');
Route::get('/user', 'AdminController@user')->name('user');
Route::get('/admin/add/category/page', 'AdminController@addCategoryPage')->name('category.view');
Route::post('/admin/store/category','AdminController@storeCategory')->name('category.store');
Route::post('/admin/actions/category', 'AdminController@catActions')->name('category.actions');
Route::post('/admin/actions/category/edit', 'AdminController@editCategory')->name('category.edit');
Route::get('/admin/view/add/book', 'AdminController@viewAddBookAdmin')->name('admin.viewAddBook');
Route::post('/admin/store/book', 'AdminController@storeBookAdmin')->name('admin.store_book');
Route::get('/admin/download/book/{uuid}', 'AdminController@downloadBookAdmin')->name('admin.downloadBook');
Route::get('/admin/delete/book/{id}', 'AdminController@deleteBookAdmin')->name('admin.deleteBook');
Route::get('/admin/view/request', 'AdminController@viewRequestAdmin')->name('admin.viewRequest');
Route::post('/admin/request/actions','AdminController@requestAction')->name('admin.requestAction');


});

//book upload, download
// Route::resource('books', 'BookController@create');
// Route::get('books/{uuid}/download', 'BookController@download')->name('books.download');

//customer routes
Route::middleware(["role:customer"])->group(function(){
Route::get('/index', 'CustomerController@index');
Route::get('/customer/dashboard', 'CustomerController@dashboard')->name('dashboard');
Route::get('/customer/category', 'CustomerController@category')->name('c_category');
Route::get('/customer/myBooks', 'CustomerController@myBooks')->name('myBooks');
Route::get('/customer/create/book', 'CustomerController@create')->name('create_book');
Route::post('/customer/store/book', 'CustomerController@storeBook')->name('store_book');
Route::get('/customer/view/add/book', 'CustomerController@viewAddBook')->name('customer.viewAddBook');
Route::get('/customer/download/book/{uuid}', 'CustomerController@downloadBook')->name('customer.downloadBook');
Route::get('/customer/delete/book/{id}', 'CustomerController@deleteBook')->name('customer.deleteBook');
Route::get('/customer/view/categorywise/books/{id}','CustomerController@catwiseBook')->name('viewCatwiseBook');
Route::get('/customer/request/book/{id}', 'CustomerController@requestBook')->name('customer.reqBook');

});
// Route::resource('index', 'BookController@index');
// Route::resource('/customer/create/store', 'BookController@store', ['as' => 'store']);
// Route::resource('store', 'BookController@store');

Route::get('/assignRole', function(){

});