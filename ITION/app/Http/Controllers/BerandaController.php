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
        if($total_lomba > 0)
            $lomba_random = rand(0,$total_lomba - 1);
        else
            $lomba_random = rand(0,$total_lomba);

        $total_galeri = DB::table('galeri')->count();
        if($total_galeri < 2)
            $total_galeri = 0;
        else
            $total_galeri -= 2;
       
        $highlight =    DB::table('lomba')
                        ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori') 
                        ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori')
                        ->where('lomba.deadline', '>=', $today)
                        ->offset($lomba_random)
                        ->limit(1)
                        ->get();

        $galeri =   DB::table('galeri')
                    ->join('lomba', 'galeri.id_lomba', '=', 'lomba.id_lomba')
                    ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                    ->select('galeri.*','kategori.nama_kategori')
                    ->offset($total_galeri)
                    ->limit(2)
                    ->get();

        if($total_lomba < 5)
            $total_lomba = 0;
        else
            $total_lomba -= 5;
            
        $lomba = DB::table('lomba')
                ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori') 
                ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori')
                ->where('lomba.deadline', '>=', $today)        
                ->orderBy('lomba.deadline')
                ->offset($total_lomba)
                ->limit(4)
                ->get();
        
        $testimoni = DB::table('testimoni')
        ->join('lomba', 'testimoni.id_lomba', '=', 'lomba.id_lomba')
        ->join('reviewer', 'testimoni.id_reviewer', '=', 'reviewer.id_reviewer')
        ->select('reviewer.nama','reviewer.foto','lomba.judul','testimoni.tahun_lomba','testimoni.testimoni')
        ->offset(1)
        ->limit(5)
        ->get();
        
        $testimoni1 = DB::table('testimoni')
        ->join('lomba', 'testimoni.id_lomba', '=', 'lomba.id_lomba')
        ->join('reviewer', 'testimoni.id_reviewer', '=', 'reviewer.id_reviewer')
        ->select('reviewer.nama','reviewer.foto','lomba.judul','testimoni.tahun_lomba','testimoni.testimoni')
        ->limit(1)
        ->get();
        
        return view('beranda.beranda',['highlight' => $highlight, 'galeri' => $galeri, 'lomba' => $lomba, 'testimoni' => $testimoni,'testimoni1' => $testimoni1]);
    }
}
