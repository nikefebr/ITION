<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $today = date("Y-m-d");
        $total_lomba = DB::table('lomba')->where('deadline', '>=', $today)->get()->count();
        $total_galeri = (DB::table('galeri')->count()) - 2;
        $lomba_random = rand(0,$total_lomba-1);
        
        $highlight = DB::select("SELECT lomba.id_lomba,lomba.poster,lomba.judul,lomba.deskripsi,lomba.deadline,kategori.nama_kategori 
        FROM lomba,kategori 
        WHERE lomba.id_kategori = kategori.id_kategori AND lomba.deadline >= '$today' LIMIT $lomba_random, 1");

        $galeri = DB::select("SELECT galeri.id_galeri,galeri.foto,kategori.nama_kategori 
        FROM galeri,lomba,kategori 
        WHERE galeri.id_lomba = lomba.id_lomba AND lomba.id_kategori = kategori.id_kategori LIMIT $total_galeri, 2");

        if($total_lomba < 5)
            $total_lomba = 0;
        else
            $total_lomba -= 5;
            
        $lomba = DB::select("SELECT lomba.id_lomba,lomba.poster,lomba.judul,lomba.deskripsi,lomba.deadline,kategori.nama_kategori 
        FROM lomba,kategori 
        WHERE lomba.id_kategori = kategori.id_kategori AND lomba.deadline >= '$today' LIMIT $total_lomba , 4");

        $testimoni = DB::select("SELECT reviewer.nama,reviewer.foto,lomba.judul,testimoni.tahun_lomba,testimoni.testimoni 
        FROM reviewer,testimoni,lomba 
        WHERE testimoni.id_lomba = lomba.id_lomba AND testimoni.id_reviewer = reviewer.id_reviewer LIMIT 0,5");
    
        return view('beranda.beranda',['highlight' => $highlight, 'galeri' => $galeri, 'lomba' => $lomba, 'testimoni' => $testimoni]);
    }
}
