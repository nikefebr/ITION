<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LombaController extends Controller
{
    //
    public function index()
    {
        $today = date("Y-m-d");
        $data = DB::select("SELECT lomba.id_lomba,lomba.poster,lomba.judul,lomba.deskripsi,lomba.deadline,kategori.nama_kategori 
        FROM lomba,kategori 
        WHERE lomba.id_kategori = kategori.id_kategori AND lomba.deadline >= '$today'");
        return view('lomba.lomba',['data' => $data]);
    }

    public function indexDetail($id_lomba)
    {
        $data = DB::select("SELECT lomba.*,kategori.*,penyelenggara_lomba.*
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
