<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\testimoni;
use App\Models\reviewer;
use App\Models\lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manytestimoni = DB::table('testimoni')
                        ->select('lomba.judul','reviewer.nama','tahun_lomba','testimoni.testimoni','testimoni.id_lomba','testimoni.id_reviewer')
                        ->leftJoin('lomba','lomba.id_lomba','=','testimoni.id_lomba')
                        ->leftJoin('reviewer','reviewer.id_reviewer','=','testimoni.id_reviewer')
                        ->get();

        return view('admin.testimoni.testimoni_view',compact('manytestimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manylomba = lomba::all(); //mengambil semua isi tabel
        $manyreviewer = reviewer::all(); //mengambil semua isi tabel
        return view('admin.testimoni.testimoni_input',compact('manylomba','manyreviewer'));
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
            'id_lomba' => ['required'],
            'id_reviewer' => ['required','max:255'],
            'tahun_lomba' => ['required','max:255'],
            'testimoni' => ['required']
        ]);

        
        
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            $manylomba = lomba::all(); //mengambil semua isi tabel
            $manyreviewer = reviewer::all(); //mengambil semua isi tabel
            return redirect()->route('create testimoni',compact('manylomba','manyreviewer'))->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            $lomba = lomba::find(request('id_lomba'));

            $lomba->reviewer()->attach(request('id_reviewer'),['tahun_lomba' => request('tahun_lomba'),'testimoni' => request('testimoni')]);

            //redirect
            return redirect()->route('view testimoni')->with('success','Testimoni baru berhasil dibuat!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id_lomba,$id_reviewer)
    {
        
        $manytestimoni = DB::table('testimoni')
                        ->where(['id_lomba' => $id_lomba, 'id_reviewer' => $id_reviewer])
                        ->get();
        
        $manylomba = lomba::all(); //mengambil semua isi tabel
        $manyreviewer = reviewer::all(); //mengambil semua isi tabel
        
        return view('admin.testimoni.testimoni_edit',compact('manylomba','manyreviewer','manytestimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_lomba,$id_reviewer)
    {
        // membuat validasi untuk memvalidasi isi data
        $validated = Validator::make($request->all(),[
            'id_lomba' => ['required'],
            'id_reviewer' => ['required','max:255'],
            'tahun_lomba' => ['required','max:255'],
            'testimoni' => ['required']
        ]);

        $manytestimoni = DB::table('testimoni')
            ->where(['id_lomba' => $id_lomba, 'id_reviewer' => $id_reviewer])
            ->get();
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            $manylomba = lomba::all(); //mengambil semua isi tabel
            $manyreviewer = reviewer::all(); //mengambil semua isi tabel
            return redirect()->route('edit testimoni',compact('manylomba','manyreviewer','manytestimoni'))->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            $lomba = lomba::find(request('id_lomba'));

            $lomba->reviewer()->updateExistingPivot(request('id_reviewer'),['tahun_lomba' => request('tahun_lomba'),'testimoni' => request('testimoni')]);

            //redirect
            return redirect()->route('view testimoni')->with('success','Testimoni baru berhasil diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_lomba,$id_reviewer)
    {
        $lomba = lomba::find($id_lomba);
        $lomba->reviewer()->detach($id_reviewer); //menghapus semua testimoni yang terhubung drngan reviewer

        return redirect()->route('view testimoni')->with('success', 'Testimoni Berhasil Dihapus!');
    }
}
