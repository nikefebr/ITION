<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        
    }

    public function view(){
        return view('admin.kategori_view');
    }
    
    public function create(){
        return view('admin.kategori_input');
    }

    public function store(){

    }

    public function show(){

    }
}

