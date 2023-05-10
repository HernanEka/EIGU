<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $user = User::where('id','!=',auth()->user()->id)->get();
        return view('Network', compact('user'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('Detail_Profile', compact('user'));
    }
}
