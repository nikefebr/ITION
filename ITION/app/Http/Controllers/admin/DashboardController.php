<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countlomba = DB::table('lomba')
                        ->select(DB::raw('COUNT(judul) as data'))
                        ->get();
        $countkategori = DB::table('kategori')
                        ->select(DB::raw('COUNT(nama_kategori) as data'))
                        ->get();
        $countreviewer = DB::table('reviewer')
                        ->select(DB::raw('COUNT(nama) as data'))
                        ->get();
        $countpelanggan = DB::table('pelanggan')
                        ->select(DB::raw('COUNT(nama) as data'))
                        ->get();
        $data =  DB::table('lomba')
                ->select(DB::raw('count(id_lomba) as `data`'),DB::raw('YEAR(deadline) year, MONTH(deadline) month'))
                ->groupby('year','month')
                ->get();
        return view('admin.home', compact('countlomba','countkategori','countreviewer','countpelanggan','data'));
    }
}
