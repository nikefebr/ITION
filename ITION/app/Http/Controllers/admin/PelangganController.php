<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pelanggan;
use App\Models\lomba;
use App\Mail\NewsletterLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

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
        $pelanggan->lomba()->detach();
        $pelanggan->delete();
        
        return redirect()->route('view pelanggan')->with('success', 'Pelanggan Berhasil Dihapus!');
    }


    /*NEWSLETTER CONTROLLER*/


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_newsletter()
    {
        $manylomba = lomba::all(); //mengambil semua isi tabel
        return view('admin.pelanggan_newsletter.newsletter_input',compact('manylomba'));
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_newsletter(Request $request)
    {
        // membuat validasi untuk memvalidasi isi data
        $validated = Validator::make($request->all(),[
            'subyek' => ['required','max:255'],
            'isi' => ['required']
        ]);

        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->route('create newsletter')->withErrors($validated); // redirect kembali dengan pesan error
        } else {
            
            $id_pelanggan = pelanggan::all();
            $lomba = lomba::find(request('id_lomba'));

            
            foreach ($id_pelanggan as $pelanggan):
            $lomba->pelanggan()->attach($pelanggan['id_pelanggan'],['subyek' => request('subyek'),'isi' => request('isi')]);
        
            $details = [
                'subyek' => request('subyek'),
                'id_lomba' => $lomba->id_lomba,
                'judul_lomba' => $lomba->judul,
                'poster' => $lomba->poster,
                'deskripsi' => $lomba->deskripsi,
                'deadline' => $lomba->deadline,
                'biaya' => $lomba->biaya,  
                'timeline' => $lomba->timeline, 
                'hadiah_juara_1' => $lomba->hadiah_juara_1,
                'hadiah_juara_2' => $lomba->hadiah_juara_2,
                'hadiah_juara_3' => $lomba->hadiah_juara_3, 
                'lainnya' => $lomba->lainnya,
                'email' => $pelanggan->email
            ];
            Mail::to($pelanggan->email)->send(new NewsletterLomba($details));
            endforeach;
            
            //redirect
            return redirect()->route('view newsletter')->with('success','Newsletter Berhasil Dikirim!');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_newsletter()
    {
        $manynewsletter = DB::table('newsletter')
                        ->distinct()
                        ->select('newsletter.id_lomba','lomba.judul','subyek','isi','newsletter.created_at')
                        ->leftJoin('lomba','newsletter.id_lomba','=','lomba.id_lomba')
                        ->get();
                    
        return view('admin.pelanggan_newsletter.newsletter_view',compact('manynewsletter'));
    }
}
