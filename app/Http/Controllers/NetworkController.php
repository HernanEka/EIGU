<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $user = User::where('id','!=',auth()->user()->id)->where('role','!=','Admin')->get();
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Network', compact('user','notif'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Detail_Profile', compact('user','notif'));
    }
}
