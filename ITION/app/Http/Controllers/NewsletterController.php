<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\lomba;
use App\Mail\NewsletterAwal;
use App\Mail\NewsletterLomba;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Redirect;

class NewsletterController extends Controller
{
    public function subscribe(Request $request) {
        
        $validated = Validator::make($request->all(),[
            'nama' => ['required','unique:pelanggan','max:255'],
            'email' => ['required','email','unique:pelanggan','max:255'],
        ]);
        
        // mengecek apabila terdapat error atau tidak
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated); // redirect kembali dengan pesan error
        }else {
            
            // akan membuat data baru dengan 
            pelanggan::create([
                'nama' => request('nama'),
                'email' =>request('email'),
            ]);

            $details = [            
                'email' => request('email')
            ];
    
            Mail::to(request('email'))->send(new NewsletterAwal($details));
            return redirect()->back();
        }
    }
    public function unsubscribe($email) {
        
        $pelanggans = pelanggan::where('email', '=', $email)->get();
        if(empty($pelanggans)){
            return abort(404);
        }
        else{
            foreach ($pelanggans as $pelanggan):
                $data = [            
                    'email' => $pelanggan->email,
                    'id' => $pelanggan->id_pelanggan
                ];
            endforeach;
            return view('newsletter.unsubscribe')->with('data', $data);
        }
        
    }
    public function success_unsubscribe($id) {
        
        pelanggan::find($id)->lomba()->detach();
        pelanggan::find($id)->delete();

        return Redirect::to('/');
    }
}
