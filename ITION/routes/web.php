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
    return view('footer');
});

Route::view('/lomba', 'lomba');

Route::get('/lomba/{id_lomba}',function($id){
    return view('detail_lomba');
});

Route::view('/testimoni', 'testimoni');

Route::view('/galeri', 'galeri');

Route::view('/tentang', 'tentang');
