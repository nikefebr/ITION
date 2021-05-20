<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        return view('admin.kategori_view');
    }

    public function view(){
        
    }

    public function store(){

    }
    
    public function create(){
        return view('admin.kategori_input');
    }

    public function show(){

    }

    public function update(){


    }

    public function destroy(){

    } 

    public function delete(){

    }
    
    public function edit(){

    }  
}

