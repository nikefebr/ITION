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

//Modified Auth
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin dashboard');

Route::resource('/admin/lomba', App\Http\Controllers\admin\LombaController::class, [
    'names' => [
        'index' => 'lomba view',
        'create' => 'lomba create',
        'show' => 'lomba show',
        'edit' => 'lomba edit'
    ]
]); 

Route::resource('/admin/kategori', App\Http\Controllers\admin\KategoriController::class)
->names([
        'index' => 'kategori view',
        'update' => 'kategori update',
        'create' => 'kategori create',
        'show' => 'kategori show',
        'edit' => 'kategori edit',
        'destroy' => 'kategori destroy',
        'store' => 'kategori store',
]); 


Route::get('/register', function () {
    return redirect ('/admin/register');
});

Route::get('/login', function () {
    return redirect ('/admin/login');
});
