<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $kategori = DB::select("SELECT * FROM kategori");
        $count = 0;
        foreach($kategori as $kategori_galeri){
            $count++;
            $data[$count] = DB::select("SELECT galeri.id_galeri,galeri.foto,galeri.deskripsi,galeri.tgl_foto,kategori.nama_kategori 
            FROM galeri,lomba,kategori 
            WHERE galeri.id_lomba = lomba.id_lomba 
            AND lomba.id_kategori = kategori.id_kategori
            AND kategori.nama_kategori = '$kategori_galeri->nama_kategori'");
        }
        return view('galeri.galeri',['kategori' => $kategori,'data' => $data]);
    }
}
