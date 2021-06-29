<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\reviewer;
use App\Models\lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewers = reviewer::all(); //mengambil semua isi tabel
        return view('admin.reviewer.reviewer_view', compact('reviewers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviewer.reviewer_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validasi dari reviewer
        $validated = Validator::make($request->all(),[
            'nama' => ['required','unique:reviewer','max:255'],
            'angkatan' => ['required','max:4'],
            'foto' => ['required','image'],
        ]);
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->route('create reviewer')->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            // akan membuat data baru dengan reviewer

            $namedefault = $request->foto->getClientOriginalName(); //nama foto

            $id_reviewer = reviewer::create([
                'nama' => request('nama'),
                'angkatan' => request('angkatan'),
                'foto' => $namedefault,
            ])->id_reviewer;
            
            $finder_reviewer = reviewer::find($id_reviewer);
            
            $name = 'gambar'.$id_reviewer.'.'.$request->foto->getClientOriginalExtension(); //mengganti nama foto dengan gambar+id

            if ($finder_reviewer){
                $finder_reviewer->foto = $name;
                $finder_reviewer->save();
            }

            
            $filePath = $request->foto->storeAs('reviewer',$name, ['disk' => 'public_image']); //lokasi penyimpanan foto
            $request->foto->storeAs('reviewer',$name,['disk' => 'public_image']); //menyimpan foto

            // redirect
            return redirect()->route('view reviewer')->with('success','Reviewer baru berhasil dibuat!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function show(reviewer $reviewer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(reviewer $reviewer)
    {
        return view('admin.reviewer.reviewer_edit', compact('reviewer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reviewer $reviewer)
    {
        
        //validasi data
        $validated = Validator::make($request->all(),[
            'nama' => ['required','max:255'],
            'angkatan' => ['required','max:4'],
            'foto' => ['required','image'],
        ]);

        //throw exception error
        if ($validated->fails()) {
            return redirect()->route('edit reviewer')->withErrors($validated);
        }
        else {
            $id_reviewer = $reviewer->id_reviewer;
            $name = 'gambar'.$id_reviewer.'.'.$request->foto->getClientOriginalExtension(); //mengganti nama foto dengan gambar+id

            //menghapus file yang ganda
            $ext_img_before = pathinfo($reviewer->foto, PATHINFO_EXTENSION);
            $ext_img_after = $request->foto->getClientOriginalExtension();

            if ($ext_img_before != $ext_img_after) {
                Storage::disk('public_image')->delete('reviewer/'.$reviewer->foto);
            }
            //end of delete

            $reviewer->update([
                'nama' => request('nama'),
                'angkatan' => request('angkatan'),
                'foto' => $name,
            ]);

            $filePath = $request->foto->storeAs('reviewer',$name, ['disk' => 'public_image']); //lokasi penyimpanan foto
            $request->foto->storeAs('reviewer',$name,['disk' => 'public_image']); //menyimpan foto

            return redirect()->route('view reviewer')->with('success','Reviewer '.$reviewer->nama.' berhasil diupdate!');
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(reviewer $reviewer)
    {
        Storage::disk('public_image')->delete('reviewer/'.$reviewer->foto); //menghapus gambar
        
        $reviewer->lomba()->detach(); //menghapus semua testimoni yang terhubung drngan reviewer
        $reviewer->delete(); //menghapus data dari reviewer tersebut

        return redirect()->route('view reviewer')->with('success', 'Reviewer '.$reviewer->nama.' Berhasil Dihapus!');
    }
}
