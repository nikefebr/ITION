<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $kategori = DB::table('kategori')
                    ->whereExists(function ($query) {
                        $query->select(DB::raw(1))
                            ->from('galeri')
                            ->join('lomba', 'galeri.id_lomba', '=', 'lomba.id_lomba')
                            ->whereColumn('lomba.id_kategori','kategori.id_kategori');
                    })->get();                    
        $count = 0;
        foreach($kategori as $kategori_galeri){
            $count++;
            $data[$count] = DB::table('galeri')
                            ->join('lomba', 'galeri.id_lomba', '=', 'lomba.id_lomba')
                            ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                            ->select('galeri.*','kategori.nama_kategori')
                            ->where('kategori.nama_kategori', '=', $kategori_galeri->nama_kategori)
                            ->get();
        }
        return view('galeri.galeri',['kategori' => $kategori,'data' => $data]);
    }
}
