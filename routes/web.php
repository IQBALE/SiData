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

Route::get('/', 'App\Http\Controllers\Controller@login');
Route::POST('/login-act', 'App\Http\Controllers\Controller@login_aksi');
Route::get('/logout', 'App\Http\Controllers\Controller@logout');

Route::get('/index', 'App\Http\Controllers\Controller@index')->middleware('admin');
Route::get('/Diagnosa', 'App\Http\Controllers\Controller@diagnosa')->middleware('admin');
Route::get('/Riwayat', 'App\Http\Controllers\Controller@riwayat')->middleware('admin');
Route::get('/DataDiri', 'App\Http\Controllers\Controller@datadiri')->middleware('admin');
Route::get('/Tentang', 'App\Http\Controllers\Controller@tentang')->middleware('admin');
Route::get('/DataUser',  'App\Http\Controllers\Controller@datauser')->middleware('admin');

Route::POST('/user-act', 'App\Http\Controllers\Controller@user_add')->middleware('admin');
Route::POST('/diagnosa-act','App\Http\Controllers\Controller@diagnosa_add')->middleware('admin');

// Route::get('/test',  'App\Http\Controllers\Controller@test');
