<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Kategori::all(); //mengambil semua isi tabel
        return view('admin.kategori.kategori_view', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.kategori_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function store(Request $request)
    {
        // membuat validasi dari nama kategori
        $validated = Validator::make($request->all(),[
            'nama_kategori' => ['required','unique:kategori','max:255']
        ]);
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->route('kategori create')->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            // akan membuat data baru dengan 
            Kategori::create([
                'nama_kategori' => request('nama_kategori') 
            ]);

            //redirect
            return redirect()->route('kategori view')->with('success','Kategori berhasil dibuat!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        return view('admin.kategori.kategori_view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.kategori_edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //validasi data
        $validated = Validator::make($request->all(),[
            'nama_kategori' => ['required','unique:kategori','max:255']
        ]);

        //throw exception error
        if ($validated->fails()) {
            return redirect()->route('kategori edit', compact('kategori'))->withErrors($validated);
        }
        else {
            $kategori->update([
                'nama_kategori' => $request -> nama_kategori
            ]);
            return redirect()->route('kategori view')->with('success','Kategori berhasil diupdate!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //fungsi eloquent untuk menghapus data
        $kategori->delete();
        return redirect()->route('kategori view')->with('success', 'Kategori Berhasil Dihapus!');
    }
}
