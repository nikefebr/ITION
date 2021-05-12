<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $data = DB::select("SELECT galeri.id_galeri,galeri.foto,galeri.deskripsi,lomba.tahun,kategori.nama_kategori 
        FROM galeri,lomba,kategori 
        WHERE galeri.id_lomba = lomba.id_lomba 
        AND lomba.id_kategori = kategori.id_kategori");
        // AND kategori.nama_kategori = 'Hackathon'
        return view('galeri.galeri',['data' => $data]);
    }
}
