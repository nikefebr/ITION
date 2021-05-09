<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $id_lomba_random = rand(1,2);
        $rekom = DB::select("SELECT lomba.id_lomba,lomba.poster,lomba.judul,kategori.nama_kategori 
        FROM lomba,kategori 
        WHERE lomba.id_lomba = $id_lomba_random AND lomba.id_kategori = kategori.id_kategori");

        $galeri = DB::select("SELECT galeri.id_galeri,galeri.foto,kategori.nama_kategori 
        FROM galeri,lomba,kategori 
        WHERE galeri.id_lomba = lomba.id_lomba AND lomba.id_kategori = kategori.id_kategori");

        $testimoni = DB::select("SELECT reviewer.nama,reviewer.foto,lomba.judul,testimoni.tahun_lomba,testimoni.testimoni 
        FROM reviewer,testimoni,lomba");
    
        return view('beranda.beranda',['rekom' => $rekom, 'galeri' => $galeri, 'testimoni' => $testimoni]);
    }
}
