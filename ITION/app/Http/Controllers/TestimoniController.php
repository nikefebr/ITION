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
            $data[$count] = DB::select("SELECT reviewer.nama,reviewer.foto,reviewer.angkatan,lomba.judul,testimoni.tahun_lomba,testimoni.testimoni,kategori.nama_kategori 
            FROM testimoni 
            INNER JOIN reviewer ON testimoni.id_reviewer = reviewer.id_reviewer 
            INNER JOIN lomba ON testimoni.id_lomba = lomba.id_lomba 
            INNER JOIN kategori ON lomba.id_kategori = kategori.id_kategori 
            WHERE kategori.nama_kategori = '$kategori_testimoni->nama_kategori'");
        }

        return view('testimoni.testimoni',['kategori' => $kategori, 'data'=> $data]);
    }
}
