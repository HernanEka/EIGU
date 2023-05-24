<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Koneksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function jobs()
    {
        $jobs = Job::all();
        return view('Admin_Jobs', compact('jobs'));
    }
    public function user()
    {
        $user = User::where('role', '!=','Admin')->get();
        return view('Admin_Data_User', compact('user'));
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $koneksi = Koneksi::where('user_id_1','=',$id)->orWhere('user_id_2','=',$id);
        $koneksi->delete();
        $user->delete();

        return back();
    }
}
