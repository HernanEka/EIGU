<?php

namespace App\Http\Controllers;

use App\Models\Koneksi;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $user = User::where('id', '!=', auth()->user()->id)->get();
        $pesan = Pesan::where('pengirim_id', '=', auth()->user()->id)->get();
        $koneksi = Koneksi::where('user_id_1', '=', auth()->user()->id)->OrWhere('user_id_2', '=', auth()->user()->id)->get();
        return view('Messaging', compact('user', 'pesan', 'koneksi'));
    }

    public function user($id)
    {
        $user = User::where('id', '!=', auth()->user()->id)->get();
        $pesan = Pesan::where([
            ['penerima_id','=', auth()->user()->id],
            ['pengirim_id','=',$id]
        ])->OrWhere([
            ['penerima_id','=', $id],
            ['pengirim_id','=',auth()->user()->id]
        ])->get();
        // return $pesan;
        $koneksi = Koneksi::where('user_id_1', '=', auth()->user()->id)->OrWhere('user_id_2', '=', auth()->user()->id)->get();
        return view('Messaging', compact('user', 'pesan', 'koneksi', 'id'));
    }

    public function toadmin(Request $request)
    {
        $pesan = new Pesan();

        $pesan->pengirim_id = auth()->user()->id;
        $pesan->penerima = 'Admin';
        $pesan->isi = $request->chat;

        $pesan->save();

        return back();
    }

    public function touser(Request $request, $id)
    {
        $pesan = new Pesan();

        $pesan = new Pesan();

        $pesan->pengirim_id = auth()->user()->id;
        $pesan->penerima = 'User';
        $pesan->penerima_id = $id;
        $pesan->isi = $request->chat;

        $pesan->save();

        return back();
    }
}
