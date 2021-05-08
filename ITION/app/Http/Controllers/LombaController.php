<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LombaController extends Controller
{
    //
    public function index()
    {
        $data = DB::select("SELECT lomba.id_lomba,lomba.poster,lomba.judul,kategori.nama_kategori 
        FROM lomba,kategori 
        WHERE lomba.id_kategori = kategori.id_kategori");
        return view('lomba.lomba',['data' => $data]);
    }

    public function indexDetail($id_lomba)
    {
        $data = DB::select("SELECT lomba.id_lomba,lomba.poster,lomba.judul,kategori.nama_kategori,lomba.biaya,penyelenggara_lomba.kontak
        FROM lomba,kategori,penyelenggara_lomba 
        WHERE lomba.id_lomba = $id_lomba AND lomba.id_kategori = kategori.id_kategori AND lomba.id_penyelenggara = penyelenggara_lomba.id_penyelenggara");
        if(empty($data)){
            return abort(404);
        }
        else{
            return view('lomba.detail_lomba',['data' => $data]);
        }
    }
}
