<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TestimoniController;
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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/lomba/input',[App\Http\Controllers\admin\LombaController::class, 'index']);
    Route::get('/lomba/view',[App\Http\Controllers\admin\LombaController::class, 'view']);
});

Route::get('/register', function () {
    return redirect ('/admin/register');
});

Route::get('/login', function () {
    return redirect ('/admin/login');
});

