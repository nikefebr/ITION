<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\galeri;
use App\Models\lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manygaleri = DB::table('galeri')
                        ->select('galeri.id_galeri','galeri.id_lomba','galeri.foto','galeri.deskripsi','galeri.tgl_foto','lomba.judul','kategori.nama_kategori')
                        ->leftJoin('lomba','galeri.id_lomba','=','lomba.id_lomba')
                        ->leftJoin('kategori','lomba.id_kategori','=','kategori.id_kategori')
                        ->get();
        
        return view('admin.galeri.galeri_view', compact('manygaleri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manylomba = lomba::all(); //mengambil semua tabel lomba
        
        return view('admin.galeri.galeri_input', compact('manylomba'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validasi
        $validated = Validator::make($request->all(),[
            'foto' => ['required','image'],
            'tgl_foto' => ['required'],
        ]);
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->route('create galeri')->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            // akan membuat data baru

            $namedefault = $request->foto->getClientOriginalName(); //nama foto
            
            $id_galeri = galeri::create([
                'foto' => $namedefault,
                'id_lomba' => request('id_lomba'),
                'deskripsi' => request('deskripsi'),
                'tgl_foto' => request('tgl_foto'),
            ])->id_galeri;
            
            $finder_galeri = galeri::find($id_galeri);
            $finder_lomba = lomba::find($request->id_lomba);
            
            $name = 'gambar'.$id_galeri.'.'.$request->foto->getClientOriginalExtension(); //mengganti nama foto dengan gambar+id

            if ($finder_galeri){
                $finder_galeri->foto = $name;
                $finder_galeri->save();
            }

            $admin = admin::find(Auth::id());
            $admin->galeri()->attach($id_galeri);

            
            $filePath = $request->foto->storeAs('galeri',$name, ['disk' => 'public_image']); //lokasi penyimpanan foto
            $request->foto->storeAs('galeri',$name,['disk' => 'public_image']); //menyimpan foto
            
            // redirect
            return redirect()->route('view galeri')->with('success','Galeri baru berhasil dibuat!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(galeri $galeri)
    {
        $manylomba = lomba::all(); 
        return view('admin.galeri.galeri_edit', compact('manylomba','galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galeri $galeri)
    {
        //validasi data
        $validated = Validator::make($request->all(),[
            'foto' => ['required','image'], 
            'tgl_foto' => ['required'],
        ]);

        //throw exception error
        if ($validated->fails()) {
            return redirect()->route('edit galeri',$galeri->id_galeri)->withErrors($validated);
        }
        else {
            $id_galeri = $galeri->id_galeri;
            $name = 'gambar'.$id_galeri.'.'.$request->foto->getClientOriginalExtension(); //mengganti nama foto dengan gambar+id

            //menghapus file yang ganda
            $ext_img_before = pathinfo($galeri->foto, PATHINFO_EXTENSION);
            $ext_img_after = $request->foto->getClientOriginalExtension();

            if ($ext_img_before != $ext_img_after) {
                Storage::disk('public_image')->delete('galeri/'.$galeri->foto);
            }
            //end of delete

            $galeri->update([
                'id_lomba' => request('id_lomba'),
                'deskripsi' => request('deskripsi'),
                'tgl_foto' => request('tgl_foto'),
                'foto' => $name,
            ]);

            $filePath = $request->foto->storeAs('galeri',$name, ['disk' => 'public_image']); //lokasi penyimpanan foto
            $request->foto->storeAs('galeri',$name,['disk' => 'public_image']); //menyimpan foto

            return redirect()->route('view galeri')->with('success','Gambar berhasil diupdate!'); 
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeri $galeri)
    {
        Storage::disk('public_image')->delete('galeri/'.$galeri->foto); //menghapus gambar
        $galeri->admin()->detach(); //menghapus semua pengisian galeri yang terhubung dengan galeri
        $galeri->delete(); //menghapus data dari galeri tersebut
        

        return redirect()->route('view galeri')->with('success', 'Gambar Berhasil Dihapus!');
    }
}
