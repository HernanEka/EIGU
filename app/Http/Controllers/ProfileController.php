<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();
        return view('Profile', compact('integration'));
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
