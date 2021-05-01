<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lombaController;
use App\Http\Controllers\detailLombaController;
use Illuminate\Support\Facades\DB;
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
    return view('beranda');
});

Route::get('/lomba',function(){
    $data = DB::select("select lomba.id_lomba,lomba.poster,lomba.judul,kategori.nama_kategori from lomba,kategori where lomba.id_kategori = kategori.id_kategori");
        return view('lomba',['data' => $data]);
});

Route::get('/lomba/{id_lomba?}',function($id_lomba){
    $data = DB::select("select lomba.id_lomba,lomba.poster,lomba.judul,kategori.nama_kategori,lomba.biaya from lomba,kategori where lomba.id_lomba = $id_lomba AND lomba.id_kategori = kategori.id_kategori");
    if(empty($data)){
        return abort(404);
    }
    else{
        return view('detail_lomba',['data' => $data]);
    }
});

Route::view('/testimoni', 'testimoni');

Route::view('/galeri', 'galeri');

Route::view('/tentang', 'tentang');
