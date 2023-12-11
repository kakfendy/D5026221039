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
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});
Route::get('/blog2', function () {
	return view('blog');
});
Route::get('/latihan1', function () {
	return view('latihan1');
});
Route::get('/linktree', function () {
	return view('linktree');
});
Route::get('/validasi', function () {
	return view('validasi');
});
Route::get('perkalian', 'DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog' );



Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/pegawai/{name}', 'App\Http\Controllers\DosenController@shownama');


// Route CR nilaikuliah
Route::get('/nilaikuliah', 'NilaikuliahController@indexnilai');
Route::get('/nilaikuliah/tambah', 'NilaikuliahController@tambahnilai');
Route::post('/nilaikuliah/store', 'NilaikuliahController@store');

// web.php
use App\Http\Controllers\NilaikuliahController;

Route::get('/nilaikuliah', [NilaikuliahController::class, 'indexnilai']);
Route::get('/nilaikuliah/tambah', [NilaikuliahController::class, 'tambahnilai']);
Route::post('/nilaikuliah/store', [NilaikuliahController::class, 'storenilai']);



// LAPTOP
Route::get('/laptop','App\Http\Controllers\laptopController@index');
Route::get('/laptop/tambah','App\Http\Controllers\laptopController@tambah');
Route::post('/laptop/store','App\Http\Controllers\laptopController@store');
Route::get('/laptop/edit/{id}','App\Http\Controllers\laptopController@edit');
Route::post('/laptop/update','App\Http\Controllers\laptopController@update');
Route::get('/laptop/hapus/{id}','App\Http\Controllers\laptopController@hapus');
Route::get('/laptop/view/{id}','App\Http\Controllers\laptopController@view');
Route::get('/laptop/cari','App\Http\Controllers\laptopController@cari');


