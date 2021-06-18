<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Mail\NewsletterAwal;
use App\Mail\NewsletterLomba;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    public function subscribe(Request $request) {
        
        $data = $request->input();
        $pelanggan = new pelanggan;
        $pelanggan->nama = $data['nama'];
        $pelanggan->email = $data['email'];
        $pelanggan->save();

        $details = [            
            'email' => $data['email']
        ];

        Mail::to($data['email'])->send(new NewsletterAwal($details));
        return redirect()->back();
    }
    public function unsubscribe() {
        /*
        $data = array(
            'email'=> 'bitutama05@gmail.com'
        );

        return view('newsletter.unsubscribe')->with('data', $data);*/
    }
    public function success_unsubscribe($email) {
        /*DB::table('pelanggan')->where('nama', '=', $email)->delete();
        
        $pelanggan = pelanggan::find($email);
        $pelanggan->delete();

        return Redirect::to('/');*/
    }
}
