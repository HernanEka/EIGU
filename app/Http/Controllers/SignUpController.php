<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index()
    {
        return view('Sign_Up');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'confirm' => 'same:password'
        ]);

        $user = new User();

        $nama = substr($request->email, 0, strrpos($request->email, '@'));

        $user->firstname = $nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $integration = new Integration();
        $integration->user_id = $user->id;
        $integration->save();

        return redirect('/login');
    }
}
