<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\PelangganController;
use App\Http\Controllers\admin\PenyelenggaraLombaController;
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

Route::get('/', [BerandaController::class, 'index']);

Route::get('/lomba',[LombaController::class, 'index']);

Route::get('/lomba/{id_lomba?}',[LombaController::class, 'indexDetail']);

Route::get('/testimoni', [TestimoniController::class, 'index']);

Route::get('/galeri',[GaleriController::class, 'index']);

Route::view('/tentang', 'tentang.tentang');

//Default Auth
//Auth::routes();

//Modified Auth dengan mengarahkan semua prefix ke admin
Route::group(['prefix' => 'admin'], function () {
    Auth::routes(); 
});

Route::group(['middleware' => 'auth'],function () //digunakan untuk autentikasi meskipun membuka link selain login
{
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::resource('/admin/lomba', App\Http\Controllers\admin\LombaController::class)
    ->names([ //sebagai nama setiap route supaya lebih mudah memberikan nama pada head
        'index' => 'lomba view',
        'update' => 'lomba update',
        'create' => 'lomba create',
        'show' => 'lomba show',
        'edit' => 'lomba edit',
        'destroy' => 'lomba destroy',
        'store' => 'lomba store',
    ]); 

Route::resource('/admin/kategori', App\Http\Controllers\admin\KategoriController::class)
    ->names([
        'index' => 'view kategori',
        'update' => 'update kategori',
        'create' => 'create kategori',
        'show' => 'show kategori',
        'edit' => 'edit kategori',
        'destroy' => 'destroy kategori',
        'store' => 'store kategori',
    ]);

Route::resource('/admin/pelanggan', App\Http\Controllers\admin\PelangganController::class)
    ->only([
        'index','create','store','destroy'
    ])
    ->names([
        'index' => 'view pelanggan',
        'create' => 'create pelanggan',
        'destroy' => 'destroy pelanggan',
        'store' => 'store pelanggan',
    ]);

Route::resource('/admin/penyelenggara', App\Http\Controllers\admin\PenyelenggaraLombaController::class)
    ->names([
        'index' => 'penyelenggara view',
        'update' => 'penyelenggara update',
        'create' => 'penyelenggara create',
        'show' => 'penyelenggara show',
        'edit' => 'penyelenggara edit',
        'destroy' => 'penyelenggara destroy',
        'store' => 'penyelenggara store',
    ]);
});





Route::get('/register', function () {
    return redirect ('/admin/register'); //redirecting apabila user salah memasukkan prefix register saja
});

Route::get('/login', function () {
    return redirect ('/admin/login'); //redirecting apabila user salah memasukkan prefix login saja
});
