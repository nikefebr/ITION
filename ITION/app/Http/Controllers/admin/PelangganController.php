<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsciber = pelanggan::all(); //mengambil semua isi tabel
        return view('admin.pelanggan_newsletter.pelanggan_view',compact('subsciber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan_newsletter.pelanggan_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validasi untuk memvalidasi isi data
        $validated = Validator::make($request->all(),[
            'nama' => ['required','unique:pelanggan','max:255'],
            'email' => ['required','email','unique:pelanggan','max:255'],
        ]);
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->route('create pelanggan')->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            // akan membuat data baru dengan 
            pelanggan::create([
                'nama' => request('nama'),
                'email' =>request('email'),
            ]);

            //redirect
            return redirect()->route('view pelanggan')->with('success','Pelanggan baru berhasil dibuat!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggan $pelanggan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        //fungsi eloquent untuk menghapus data
        $pelanggan->delete();
        return redirect()->route('view pelanggan')->with('success', 'Pelanggan Berhasil Dihapus!');
    }
}
