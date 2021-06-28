<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\lomba;
use App\Models\admin;
use App\Models\galeri;
use App\Models\Kategori;
use App\Models\penyelenggara_lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manylomba = lomba::all(); //mengambil semua isi tabel
        return view('admin.lomba.lomba_view', compact('manylomba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manykategori = Kategori::all(); //mengambil semua tabel kategori
        $manypenyelenggara = penyelenggara_lomba::all(); //mengambil semua tabel penyelenggara
        
        return view('admin.lomba.lomba_input', compact('manykategori','manypenyelenggara'));
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
                    'judul' => ['required','max:255','unique:lomba'],
                    'deskripsi' => ['max:511'],
                    'syarat' => ['max:511'],
                    'timeline' =>['max:511'],
                    'biaya' => ['required','max:255'],
                    'link_panduan' => ['required','max:255'],
                    'hadiah_juara_1' => ['max:255'],
                    'hadiah_juara_2' => ['max:255'],
                    'hadiah_juara_3' => ['max:255'],
                    'lainnya' => ['max:255'],
                    'tahun' => ['required','max:4'],
                    'deadline' =>['required'],
                    'poster' => ['required','image'],
                    'link_website' => ['required','max:255'],
                ]);
                
                // mengecek apabila terdapat error atau tidak
                if ($validated->fails()) {
                    return redirect()->route('create lomba')->withErrors($validated); // redirect kembali dengan pesan error
                } else {
                    
                    // akan membuat data baru dengan reviewer
        
                    $namedefault = $request->poster->getClientOriginalName(); //nama poster
        
                    $id_lomba = lomba::create([
                        'judul' => request('judul'),
                        'deskripsi' => request('deskripsi'),
                        'syarat' => request('syarat'),
                        'timeline' => request('timeline'),
                        'biaya' => request('biaya'),
                        'link_panduan' => request('link_panduan'),
                        'hadiah_juara_1' => request('hadiah_juara_1'),
                        'hadiah_juara_2' => request('hadiah_juara_2'),
                        'hadiah_juara_3' => request('hadiah_juara_3'),
                        'lainnya' => request('lainnya'),
                        'tahun' => request('tahun'),
                        'deadline' => request('deadline'),
                        'link_website' => request('link_website'),
                        "id_penyelenggara" => request('id_penyelenggara'),
                        "id_kategori" => request('id_kategori'),
                        'poster' => $namedefault,
                    ])->id_lomba;

                    $admin = admin::find(Auth::id());
                    $admin->lomba()->attach($id_lomba);
                    
                    $finder_reviewer = lomba::find($id_lomba);
                    
                    $name = 'gambar'.$id_lomba.'.'.$request->poster->getClientOriginalExtension(); //mengganti nama poster dengan gambar+id
        
                    if ($finder_reviewer){
                        $finder_reviewer->poster = $name;
                        $finder_reviewer->save();
                    }
        
                    
                    $filePath = $request->poster->storeAs('lomba',$name, ['disk' => 'public_image']); //lokasi penyimpanan poster
                    $request->poster->storeAs('lomba',$name,['disk' => 'public_image']); //menyimpan poster
                    
                    
                    
                    // redirect
                    return redirect()->route('view lomba')->with('success','Lomba baru berhasil dibuat!');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function show(lomba $lomba)
    {
        return view('admin.lomba.lomba_show', compact('lomba'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function edit(lomba $lomba)
    {
        $manykategori = Kategori::all(); //mengambil semua tabel kategori
        $manypenyelenggara = penyelenggara_lomba::all(); //mengambil semua tabel penyelenggara
        return view('admin.lomba.lomba_edit', compact('lomba','manykategori','manypenyelenggara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lomba $lomba)
    {
                // membuat validasi
                $validated = Validator::make($request->all(),[
                    'judul' => ['required','max:255'],
                    'deskripsi' => ['max:511'],
                    'syarat' => ['max:511'],
                    'timeline' =>['max:511'],
                    'biaya' => ['required','max:255'],
                    'link_panduan' => ['required','max:255'],
                    'hadiah_juara_1' => ['max:255'],
                    'hadiah_juara_2' => ['max:255'],
                    'hadiah_juara_3' => ['max:255'],
                    'lainnya' => ['max:255'],
                    'tahun' => ['required','max:4'],
                    'deadline' =>['required'],
                    'poster' => ['required','image'],
                    'link_website' => ['required','max:255'],
                ]);
                
                // mengecek apabila terdapat error atau tidak
                if ($validated->fails()) {
                    return redirect()->route('edit lomba',compact('lomba'))->withErrors($validated); // redirect kembali dengan pesan error
                } else { 
                    
                    $admin = admin::find(Auth::id());
                    $admin->lomba()->sync($lomba->id_lomba);
                    $admin->touch();
                    $admin->save();
                    
                    $lomba->update([
                        'judul' => request('judul'),
                        'deskripsi' => request('deskripsi'),
                        'syarat' => request('syarat'),
                        'timeline' => request('timeline'),
                        'biaya' => request('biaya'),
                        'link_panduan' => request('link_panduan'),
                        'hadiah_juara_1' => request('hadiah_juara_1'),
                        'hadiah_juara_2' => request('hadiah_juara_2'),
                        'hadiah_juara_3' => request('hadiah_juara_3'),
                        'lainnya' => request('lainnya'),
                        'tahun' => request('tahun'),
                        'deadline' => request('deadline'),
                        'link_website' => request('link_website'),
                        "id_penyelenggara" => request('id_penyelenggara'),
                        "id_kategori" => request('id_kategori'),
                        
                    ]);

                    if ($lomba->poster!=null) {
                        $id_lomba = $lomba->id_lomba;
                        $name = 'gambar'.$id_lomba.'.'.$request->poster->getClientOriginalExtension(); //mengganti nama foto dengan gambar+id
        
                    //menghapus file yang ganda
                    $ext_img_before = pathinfo($lomba->poster, PATHINFO_EXTENSION);
                    $ext_img_after = $request->poster->getClientOriginalExtension();

                    if ($ext_img_before != $ext_img_after) {
                        Storage::disk('public_image')->delete('lomba/'.$lomba->poster);
                    }
                    $filePath = $request->poster->storeAs('lomba',$name, ['disk' => 'public_image']); //lokasi penyimpanan foto
                    $request->poster->storeAs('lomba',$name,['disk' => 'public_image']); //menyimpan foto

                    
                    $lomba->update([
                        'poster' => $name
                    ]);
                    }
        
                    
        
                    return redirect()->route('view lomba')->with('success','lomba '.$lomba->judul.' berhasil diupdate!');
                }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(lomba $lomba)
    {

        Storage::disk('public_image')->delete('lomba/'.$lomba->poster); //menghapus gambar
        
        $lomba->pelanggan()->detach(); //menghapus semua newsletter yang terhubung dengan lomba

        /*if (galeri::find($lomba->id_lomba);) {
            $lomba->galeri()->get()->delete(); //menghapus semua galeri yang terhubung dengan lomba
        }*/
        
        
        $lomba->admin()->detach(); //menghapus semua data pengisian galeri yang terhubung dengan lomba
        $lomba->reviewer()->detach(); //menghapus semua newsletter yang terhubung dengan lomba
        $lomba->delete(); //menghapus data dari reviewer tersebut

        return redirect()->route('view lomba')->with('success', 'Lomba '.$lomba->judul.' Berhasil Dihapus!');
    }
}
