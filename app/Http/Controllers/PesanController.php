<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $user = User::where('id','!=',auth()->user()->id)->get();
        $pesan = Pesan::where('user_id','=',auth()->user()->id)->get();
        return view('Messaging', compact('user','pesan'));
    }

    public function toadmin(Request $request)
    {
        $pesan = new Pesan();

        $pesan->user_id = auth()->user()->id;
        $pesan->penerima = 'Admin';
        $pesan->isi = $request->chat;

        $pesan->save();

        return back();
    }
}
