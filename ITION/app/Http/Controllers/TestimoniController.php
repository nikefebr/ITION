<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    //
    public function index()
    {
        $data = DB::select("SELECT reviewer.nama,reviewer.foto,lomba.judul,testimoni.tahun_lomba,testimoni.testimoni 
        FROM reviewer,testimoni,lomba 
        WHERE testimoni.id_lomba = lomba.id_lomba AND testimoni.id_reviewer = reviewer.id_reviewer");
        
        return view('testimoni.testimoni',['data' => $data]);
    }
}
