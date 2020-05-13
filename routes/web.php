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
    return view('welcome');
});

Route::get("/mail/send", "MailController@send");

Route::get("/login", "LoginController@showLoginForm")->name("login");
Route::post("/login", "LoginController@login")->name("login.login");

Route::get("/logout", "LoginController@logout")->name("logout");

Route::prefix("si-merchandise")->middleware("auth")->group(function () {

//--------------------------------------TABEL MAHASISWA-------------------------------------
	
Route::get('/data-product', 'ProductController@index')->name('product.index');

Route::get('/data-product/detail/{id}', 'ProductController@show')->name('product.show');

Route::get('/data-product/create', 'ProductController@create')->name('product.create');

Route::post('/data-product', 'ProductController@store')->name('product.store');

Route::get('/data-product/edit/{id}', 'ProductController@edit')->name('product.edit');

Route::post('/data-product/update/{id}', 'ProductController@update')->name('product.update');

Route::get('/data-product/hapus/{id}', 'ProductController@destroy')->name('product.destroy');

Route::get('/dashboard', 'ProductController@dashboard')->name('product.dashboard');

Route::resource("product", "ProductController")->middleware("web");

// Route::get('/dashboard', 'ProductController@hitungtable');

//-----------------------------------TABEL KATEGORI---------------------------------------------

Route::get('/kategori', 'KategoriController@index')->name('kategori.index');

Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');

Route::post('/kategori', 'KategoriController@store')->name('kategori.store');

Route::get('/kategori/hapus/{id_kategori}', 'KategoriController@destroy')->name('kategori.destroy');

//------------------------------------TABEL STORE-------------------------------------------------

Route::get('/store', 'StoreController@index')->name('store.index');

Route::get('/store/create', 'StoreController@create')->name('store.create');

Route::post('/store', 'StoreController@store')->name('store.store');

Route::get('/store/edit/{id}', 'StoreController@edit')->name('store.edit');

Route::post('/store/update/{id}', 'StoreController@update')->name('store.update');


//----------------------------------TABEL USERS------------------------------------------------

Route::get('/profile', 'UserController@index')->name('users.index');

Route::get('/profile/edit/{id}', 'UserController@edit')->name('users.edit');

Route::post('/profile/update/{id}', 'UserController@update')->name('users.update');

// -------------------------------EXPORT EXCEL------------------------------------------

Route::get('/excel', 'ProductController@excel')->name('excel');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
