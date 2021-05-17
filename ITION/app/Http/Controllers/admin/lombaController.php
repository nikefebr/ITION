<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lombaController extends Controller
{
    public function index(){
        return view('admin.lomba_input');
    }

    public function view(){
        return view('admin.lomba_view');
    }
    
    public function create(){

    }

    public function store(){

    }

    public function show(){

    }
}
