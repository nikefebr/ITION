<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lombaController extends Controller
{
    public function index(){
        
    }

    public function view(){
        return view('admin.lomba_view');
    }
    
    public function create(){
        return view('admin.lomba_input');
    }

    public function store(){

    }

    public function show(){

    }
}
