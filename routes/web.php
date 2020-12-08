<?php

use Facade\FlareClient\View;
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

Route::get('/', 'App\Http\Controllers\BahanController@index');

Route::get('/detailbahan/{id}', 'App\Http\Controllers\BahanController@detail');

Route::match(['get', 'post'], '/tambahbahan', 'App\Http\Controllers\BahanController@tambah');

Route::match(['get', 'post'], '/ubahbahan/{id}', 'App\Http\Controllers\BahanController@ubah');

Route::get('/hapusbahan/{id}', 'App\Http\Controllers\BahanController@hapus');

Route::get('/request', 'App\Http\Controllers\BahanController@request');

Route::match(['get', 'post'], '/request/tambahrequest', 'App\Http\Controllers\BahanController@tambahrequest');

Route::get('/request/detailrequest/{id}', 'App\Http\Controllers\BahanController@detailrequest');

Route::get('/request/hapusrequest/{id}', 'App\Http\Controllers\BahanController@hapusrequest');
