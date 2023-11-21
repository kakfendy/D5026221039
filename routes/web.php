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

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/ltree', function () {
    return view('linktree');
});

Route::get('/val', function () {
    return view('validasi');
});

Route::get('perkalian', 'App\Http\Controllers\MhsController@index');
