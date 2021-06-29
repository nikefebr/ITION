<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kategori;

class LombaController extends Controller
{
    //
    public function index()
    {
        $today = date("Y-m-d");
        $kategori = kategori::all();  
        $selectedKategori = NULL;   
        $bulan = array(
            "1" => "Januari", "2" => "Februari", "3" => "Maret", "4" => "April",
            "5" => "Mei", "6" => "Juni", "7" => "Juli", "8" => "Agustus",
            "9" => "September", "10" => "Oktober", "11" => "November", "12" => "December",
            );
        $selectedBulan = NULL; 
        if($_GET){
            if(!empty($_GET['query'])){
                $data = DB::table('lomba')
                ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba')
                ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori','pengisian_lomba.created_at')
                ->where('lomba.deadline', '>=', $today)
                ->where('lomba.judul', 'LIKE', '%'.$_GET['query'].'%')
                ->orWhere('kategori.nama_kategori', 'LIKE', '%'.$_GET['query'].'%')
                ->orderBy('lomba.deadline')
                ->get();
            }
            else{
                if(!empty($_GET['kategori']) || !empty($_GET['bulan'])){
                    if(empty($_GET['bulan'])){
                        $data = DB::table('lomba')
                        ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                        ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba') 
                        ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori','pengisian_lomba.created_at')
                        ->where('lomba.deadline', '>=', $today)
                        ->where('kategori.id_kategori', '=', $_GET['kategori'])
                        ->orderBy('lomba.deadline')
                        ->get();
                        $selectedKategori = $_GET['kategori'];
                    }
                    elseif(empty($_GET['kategori'])){
                        $data = DB::table('lomba')
                        ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                        ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba')
                        ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori','pengisian_lomba.created_at')
                        ->where('lomba.deadline', '>=', $today)
                        ->whereMonth('lomba.deadline', $_GET['bulan'])
                        ->orderBy('lomba.deadline')
                        ->get();
                        $selectedBulan = $_GET['bulan'];
                    }
                    else{
                        $data = DB::table('lomba')
                        ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                        ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba')
                        ->where('lomba.deadline', '>=', $today)
                        ->where('kategori.id_kategori', '=', $_GET['kategori'])
                        ->whereMonth('lomba.deadline', $_GET['bulan'])
                        ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori','pengisian_lomba.created_at')
                        ->orderBy('lomba.deadline')
                        ->get();
                        $selectedKategori = $_GET['kategori'];
                        $selectedBulan = $_GET['bulan'];
                    }
                    
                }
                else{
                    $data = DB::table('lomba')
                    ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                    ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba')
                    ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori','pengisian_lomba.created_at')
                    ->where('lomba.deadline', '>=', $today)
                    ->orderBy('lomba.deadline')
                    ->get();
                }                
            }            
        }
        else{
            $data = DB::table('lomba')
                ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori') 
                ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba')
                ->select('lomba.id_lomba', 'lomba.poster', 'lomba.judul', 'lomba.deskripsi', 'lomba.deadline', 'kategori.nama_kategori','pengisian_lomba.created_at')
                ->where('lomba.deadline', '>=', $today)
                ->orderBy('lomba.deadline')
                ->get();
            
        }
        
        return view('lomba.lomba',[ 'kategori' => $kategori,
                                    'bulan' => $bulan,
                                    'selectedKategori' => $selectedKategori,
                                    'selectedBulan' => $selectedBulan,
                                    'data' => $data]);
    }

    public function indexDetail($id_lomba)
    {
        $data = DB::table('lomba')
                ->join('kategori', 'lomba.id_kategori', '=', 'kategori.id_kategori')
                ->join('penyelenggara_lomba', 'lomba.id_penyelenggara', '=', 'penyelenggara_lomba.id_penyelenggara')
                ->join('pengisian_lomba', 'lomba.id_lomba', '=', 'pengisian_lomba.id_lomba')
                ->select('lomba.*','kategori.*','penyelenggara_lomba.*','pengisian_lomba.*')
                ->where('lomba.id_lomba', '=', $id_lomba)
                ->get();
        if(empty($data)){
            return abort(404);
        }
        else{
            return view('lomba.detail_lomba',['data' => $data]);
        }
    }
}
