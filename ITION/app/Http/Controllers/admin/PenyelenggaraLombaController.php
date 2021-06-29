<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\penyelenggara_lomba;
use App\Models\lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class PenyelenggaraLombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizer = penyelenggara_lomba::all(); //mengambil semua isi tabel
        return view('admin.penyelenggara_lomba.penyelenggara_lomba_view',compact('organizer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyelenggara_lomba.penyelenggara_lomba_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validasi dari nama penyelenggara lomba
        $validated = Validator::make($request->all(),[
            'nama_penyelenggara' => ['required','unique:penyelenggara_lomba','max:255'],
            'kontak' => ['required','unique:penyelenggara_lomba','max:16'],
            'nama_kontak' => ['required','unique:penyelenggara_lomba','max:255'],
        ]);
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->route('create penyelenggara lomba')->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            // akan membuat data baru dengan 
            penyelenggara_lomba::create([
                'nama_penyelenggara' => request('nama_penyelenggara'),
                'kontak' => request('kontak'),
                'nama_kontak' => request('nama_kontak'),
            ]);

            //redirect
            return redirect()->route('view penyelenggara lomba')->with('success','Penyelenggara lomba berhasil dibuat!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penyelenggara_lomba  $penyelenggara_lomba
     * @return \Illuminate\Http\Response
     */
    public function show(penyelenggara_lomba $penyelenggara_lomba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penyelenggara_lomba  $penyelenggara
     * @return \Illuminate\Http\Response
     */
    public function edit(penyelenggara_lomba $penyelenggara)
    {
        return view('admin.penyelenggara_lomba.penyelenggara_lomba_edit',compact('penyelenggara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penyelenggara_lomba  $penyelenggara_lomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penyelenggara_lomba $penyelenggara)
    {
        //validasi data
        $validated = Validator::make($request->all(),[
            'nama_penyelenggara' => ['required','unique:penyelenggara_lomba','max:255'],
            'kontak' => ['required','unique:penyelenggara_lomba','max:16'],
            'nama_kontak' => ['required','unique:penyelenggara_lomba','max:255'],
        ]);

        //throw exception error
        if ($validated->fails()) {
            return redirect()->route('edit penyelenggara lomba', compact('penyelenggara'))->withErrors($validated);
        }
        else {
            $penyelenggara->update([
                'nama_penyelenggara' => $request -> nama_penyelenggara,
                'kontak' => $request -> kontak,
                'nama_kontak' => $request -> nama_kontak,
            ]);
            return redirect()->route('view penyelenggara lomba')->with('success','Penyelenggara Lomba berhasil diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penyelenggara_lomba  $penyelenggara_lomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(penyelenggara_lomba $penyelenggara)
    {
        $datapenyelenggara = lomba::where('id_penyelenggara', $penyelenggara->id_penyelenggara)->get();
        $data = NULL;

        foreach($datapenyelenggara as $penyelenggara):
        $data = $penyelenggara->id_penyelenggara;
        endforeach;

        if ($data == $penyelenggara->id_penyelenggara) {
            return redirect()->route('view penyelenggara lomba')->withErrors('Masih ada lomba yang berhubungan dengan penyelenggara '.$penyelenggara->nama_penyelenggara);
        }
        $penyelenggara->delete();
        return redirect()->route('view penyelenggara lomba')->with('success', 'Penyelenggara Lomba Berhasil Dihapus!');
    }
}
