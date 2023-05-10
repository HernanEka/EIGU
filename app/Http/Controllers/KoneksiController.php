<?php

namespace App\Http\Controllers;

use App\Models\Koneksi;
use App\Models\User;
use Illuminate\Http\Request;

class KoneksiController extends Controller
{
    public function buatkoneksi(Request $request)
    {
        $koneksi = new Koneksi();

        $user = User::where('email','=',$request->search)->first();

        $koneksi->user_id_1 = auth()->user()->id;
        $koneksi->user_id_2 = $user->id;
        $koneksi->save();

        return back();


    }
}
