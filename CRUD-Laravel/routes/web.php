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

Route::get('/items/create', 'ItemController@create'); //menampilkan halaman form
Route::post('/items', 'ItemController@store'); //menyimpan data
Route::get('/items', 'ItemController@index'); //menampilkan data
Route::get('/items/{id}', 'ItemController@show'); //menampilkan data sesuai id
Route::get('/items/{id}/edit', 'ItemController@edit'); //menampilkan form edit
Route::put('/items/{id}', 'ItemController@update'); //mengubah data
Route::delete('/items/{id}', 'ItemController@destroy'); //menghapus data

Route::resource('categories', 'CategoryController');

// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan', 'PertanyaanController@index');
// Route::get('/pertanyaan/create', 'PertanyaanController@create');

// Route::post('/jawaban', 'JawabanController@store');
// Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
// Route::get('/jawaban/{pertanyaan_id}/create', 'JawabanController@create');
// Route::get('/jawaban/{pertanyaan_id}/edit', 'JawabanController@edit');
// Route::put('/jawaban/{pertanyaan_id}', 'JawabanController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
