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

//Apabila mengubah nama pada route diharapkan untuk mengubah juga baik pada blade.php maupun controllernya

//Modified Auth dengan mengarahkan semua prefix ke admin
Route::group(['prefix' => 'admin'], function () 
{
    Auth::routes(); 


    Route::group(['middleware' => 'auth'],function () //digunakan untuk tetap mengarahkan ke login meskipun membuka link selain login
    {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

        Route::resource('/lomba', App\Http\Controllers\admin\LombaController::class)
            ->names([ //sebagai nama setiap route supaya lebih mudah memberikan nama pada head dan title
            'index' => 'view lomba',
            'update' => 'update lomba',
            'create' => 'create lomba',
            'show' => 'show lomba',
            'edit' => 'edit lomba',
            'destroy' => 'destroy lomba',
            'store' => 'store lomba',
            ]); 

        Route::resource('/kategori', App\Http\Controllers\admin\KategoriController::class)
            ->names([
            'index' => 'view kategori', //tampilan web untuk melihat seluruh data
            'update' => 'update kategori', // megubah satu data yang sudah ada
            'create' => 'create kategori', // tampilan web untuk membuat data baru
            'show' => 'show kategori', // tampilan web untuk melihat salah satu data secara spesifik
            'edit' => 'edit kategori', // tampilan web untuk mengubah data yang sudah ada
            'destroy' => 'destroy kategori', // menghapus data baru
            'store' => 'store kategori', // menyimpan data baru
            ]);

        Route::resource('/pelanggan', App\Http\Controllers\admin\PelangganController::class)
            ->only([
            'index','create','store','destroy' //memasukkan hanya 4 route resources untuk create, read, dan delete
            ])
            ->names([
            'index' => 'view pelanggan',
            'create' => 'create pelanggan',
            'destroy' => 'destroy pelanggan',
            'store' => 'store pelanggan',
            ]);

        Route::resource('/penyelenggara', App\Http\Controllers\admin\PenyelenggaraLombaController::class)
            ->names([
            'index' => 'view penyelenggara lomba',
            'update' => 'update penyelenggara lomba',
            'create' => 'create penyelenggara lomba',
            'show' => 'show penyelenggara lomba',
            'edit' => 'edit penyelenggara lomba',
            'destroy' => 'destroy penyelenggara lomba',
            'store' => 'store penyelenggara lomba',
            ]);
        
        Route::resource('/reviewer',App\Http\Controllers\admin\ReviewerController::class)
        ->names([
                'index' => 'view reviewer',
                'update' => 'update reviewer',
                'create' => 'create reviewer',
                'show' => 'show reviewer',
                'edit' => 'edit reviewer',
                'destroy' => 'destroy reviewer',
                'store' => 'store reviewer',
        ]);
        
        Route::resource('/galeri',App\Http\Controllers\admin\GaleriController::class)
            ->names([
                'index' => 'view galeri',
                'update' => 'update galeri',
                'create' => 'create galeri',
                'show' => 'show galeri',
                'edit' => 'edit galeri',
                'destroy' => 'destroy galeri',
                'store' => 'store galeri',
            ]);     

        Route::get('/newsletter/create',[App\Http\Controllers\admin\PelangganController::class, 'create_newsletter'])->name('create newsletter');
        Route::post('/newsletter',[App\Http\Controllers\admin\PelangganController::class, 'store_newsletter'])->name('store newsletter');
        Route::get('/newsletter',[App\Http\Controllers\admin\PelangganController::class, 'index_newsletter'])->name('view newsletter');
    });
});




Route::get('/register', function () {
    return redirect ('/admin/register'); //redirecting apabila user salah memasukkan prefix register saja
});

Route::get('/login', function () {
    return redirect ('/admin/login'); //redirecting apabila user salah memasukkan prefix login saja
});
