<?php

namespace App\Http\Controllers;

use App\Models\Koneksi;
use App\Models\User;
use Illuminate\Http\Request;

class KoneksiController extends Controller
{
    public function buatkoneksi(Request $request)
    {
        $user = User::where('email', '=', $request->search)->first();

        $check = Koneksi::all();

        if ($check->where($check->where('user_id_1', '=', auth()->user()->id)->where('user_id_2', '=', $user->id))->where($check->where('user_id_2', '=', auth()->user()->id)->where('user_id_1', '=', $user->id))) {
            return redirect('/messaging/user/' . $user->id);
        }

        $koneksi = new Koneksi();
        $koneksi->user_id_1 = auth()->user()->id;
        $koneksi->user_id_2 = $user->id;
        $koneksi->save();

        return redirect('/messaging/user/' . $user->id);
    }
}
