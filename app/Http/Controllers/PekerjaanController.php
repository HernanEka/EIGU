<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Job',compact('jobs','notif'));
    }
}
