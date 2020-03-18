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

Route::group(['middleware' => 'auth'], function(){

//--------------------------------------TABEL MAHASISWA-------------------------------------
	
Route::get('/data-product', 'ProductController@index')->name('product.index');

Route::get('/data-product/detail/{id}', 'ProductController@show')->name('product.show');

Route::get('/data-product/create', 'ProductController@create')->name('product.create');

Route::post('/data-product', 'ProductController@store')->name('product.store');

Route::get('/data-product/edit/{id}', 'ProductController@edit')->name('product.edit');

Route::post('/data-product/update/{id}', 'ProductController@update')->name('product.update');

Route::get('/data-product/hapus/{id}', 'ProductController@destroy')->name('product.destroy');

Route::get('/dashboard', 'ProductController@dashboard')->name('product.dashboard');

// Route::get('/dashboard', 'ProductController@hitungtable');

//-----------------------------------TABEL JURUSAN---------------------------------------------

Route::get('/kategori', 'KategoriController@index')->name('kategori.index');

Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');

Route::post('/kategori', 'KategoriController@store')->name('kategori.store');

Route::get('/kategori/hapus/{id}', 'KategoriController@destroy')->name('kategori.destroy');

//----------------------------------TABEL USERS------------------------------------------------

Route::get('/profile', 'UserController@index')->name('users.index');

Route::get('/profile/edit/{id}', 'UserController@edit')->name('users.edit');



});

Auth::routes();

Route::get('/home', 'ProductController@dashboard')->name('home');
