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

Route::get('/', function () {
    return view('welcome');
});
//data-table
Route::get('/data-tables',function(){
    return view('halaman.data-table');
});
//table
Route::get('/table',function(){
    return view('halaman.table');
});
//CRUD
//mengarah untuk buat data
Route::get('/kategori/create','KategoriController@create');
//menyimpan data ke tabel kategori
Route::post('/kategori','KategoriController@store');

// read data/ menampilkan semua data
Route::get('/kategori','KategoriController@index');
// detail data
Route::get('/kategori/{kategori_id}','KategoriController@show');
//form edit data
Route::get('/kategori/{kategori_id}/edit','KategoriController@edit');
//update data ke kategori
Route::put('/kategori/{kategori_id}','KategoriController@update');
//delete data
Route::delete('/kategori/{kategori_id}','KategoriController@destroy');