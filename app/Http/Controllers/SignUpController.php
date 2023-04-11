<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $user->password = $request->password;
        $user->save();

        return redirect('/login');
    }
}
