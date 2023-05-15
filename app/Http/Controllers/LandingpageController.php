<?php

namespace App\Http\Controllers;

use App\Models\Koneksi;
use App\Models\Notifikasi;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $connect = Koneksi::where('user_id_1', '=', auth()->user()->id)->orWhere('user_id_2', '=', auth()->user()->id)->get();
        $user = User::all();
        $postingan = Postingan::latest()->get();
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Landing_Page', compact('connect', 'user', 'postingan', 'notif'));
    }

    public function detail($id)
    {
        $user = User::all();
        $postingan = Postingan::find($id);
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest();
        return view('Detail_Postingan', compact('postingan','user','notif'));
    }


}
