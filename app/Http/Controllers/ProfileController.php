<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Profile');
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->motto = $request->motto;
        $user->region = $request->region;
        $user->city = $request->city;
        $user->save();

        return back();
    }
}
