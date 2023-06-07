<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function privacy()
    {
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->where('read','=','False')->latest()->get();
        return view('Settings_Privacy',compact('notif'));
    }

    public function email(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->email = $request->emailbaru;
        $user->save();

        return back();

    }

    public function nohp(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->nohp = $request->nohpbaru;
        $user->save();

        return back();

    }

    public function password(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if ($request->password == $request->confirm) {
            $user->password = Hash::make($request->password);
            $user->save();

            return back();
        }

        return back()->with('errors', 'Password dan Konfirmasi Password Tidak Sama');


    }

    public function security()
    {
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->where('read','=','False')->latest()->get();
        return view('Settings_Security',compact('notif'));
    }

    public function privasi()
    {
        $user = User::find(auth()->user()->id);

        $user->privasi = 'True';
        $user->save();

        return back();
    }

    public function publik()
    {
        $user = User::find(auth()->user()->id);

        $user->privasi = 'False';
        $user->save();

        return back();
    }

    public function password2nd(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->password2nd = $request->password2nd;
        $user->save();

        return back();
    }

    public function notification()
    {
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->where('read','=','False')->latest()->get();

        return view('Settings_Notification',compact('notif'));
    }

    public function enable_notif()
    {
        $user = User::find(auth()->user()->id);

        $user->notifikasi = 'True';
        $user->save();

        return back();
    }

    public function Disable_notif()
    {
        $user = User::find(auth()->user()->id);

        $user->notifikasi = 'False';
        $user->save();

        return back();
    }
}
