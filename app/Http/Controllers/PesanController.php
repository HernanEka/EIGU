<?php

namespace App\Http\Controllers;

use App\Models\Koneksi;
use App\Models\Notifikasi;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $user = User::where('id', '!=', auth()->user()->id)->get();
        $pesan = Pesan::where('pengirim_id', '=', auth()->user()->id)->where('penerima', '=', 'Admin')->get();
        $koneksi = Koneksi::where('user_id_1', '=', auth()->user()->id)->OrWhere('user_id_2', '=', auth()->user()->id)->get();
        $notif = Notifikasi::where('user_id', '=', auth()->user()->id)->latest()->get();
        return view('Messaging', compact('user', 'pesan', 'koneksi', 'notif'));
    }

    public function user($id)
    {
        $user = User::where('id', '!=', auth()->user()->id)->get();
        $pesan = Pesan::where([
            ['penerima_id', '=', auth()->user()->id],
            ['pengirim_id', '=', $id]
        ])->OrWhere([
            ['penerima_id', '=', $id],
            ['pengirim_id', '=', auth()->user()->id]
        ])->get();
        // return $pesan;
        $koneksi = Koneksi::where('user_id_1', '=', auth()->user()->id)->OrWhere('user_id_2', '=', auth()->user()->id)->get();
        $notif = Notifikasi::where('user_id', '=', auth()->user()->id)->latest()->get();
        return view('Messaging', compact('user', 'pesan', 'koneksi', 'id', 'notif'));
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

    public function fromadmin(Request $request,$id)
    {
        $pesan = new Pesan();

        $pesan->pengirim_id = $id;
        $pesan->penerima_id = $id;
        $pesan->penerima = 'Admin';
        $pesan->isi = $request->chat;

        $pesan->save();

        return back();
    }

    public function touser(Request $request, $id)
    {

        $pesan = new Pesan();
        $pesan->pengirim_id = auth()->user()->id;
        $pesan->penerima = 'User';
        $pesan->penerima_id = $id;
        $pesan->isi = $request->chat;

        $pesan->save();

        $user = User::find($id);

        if ($user->notifikasi == 'True') {
            $log = new Notifikasi();

            $log->user_id = $id;
            $log->pesan = auth()->user()->firstname . ' ' . auth()->user()->lastname . ' Mengirimi Anda Pesan';
            $log->link = '/messaging/user/' . auth()->user()->id;
            $log->save();
        }

        return back();
    }
}
