<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    //
    public function index()
    {   
        $kategori = DB::select("SELECT * FROM kategori");
        $count = 0;
        foreach($kategori as $kategori_testimoni){
            $count++;
            $data[$count] = DB::select("SELECT reviewer.nama,reviewer.foto,lomba.judul,testimoni.tahun_lomba,testimoni.testimoni,kategori.nama_kategori 
            FROM reviewer,testimoni,lomba,kategori 
            WHERE testimoni.id_lomba = lomba.id_lomba 
            AND testimoni.id_reviewer = reviewer.id_reviewer 
            AND lomba.id_kategori = kategori.id_kategori 
            AND kategori.nama_kategori = '$kategori_testimoni->nama_kategori'");
        }
        return view('testimoni.testimoni',['kategori' => $kategori,'data' => $data]);
    }
}
