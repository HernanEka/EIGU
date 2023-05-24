<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $notif = Notifikasi::where('user_id', '=', auth()->user()->id)->latest()->get();
        $user = User::where('firstname', 'like', '%' . request('search') . '%')->orWhere('lastname', 'like', '%' . request('search'))->latest()->paginate(3);
        $job = Job::where('title', 'like', '%' . request('search') . '%')->orWhere('company', 'like', '%' . request('search') . '%')->latest()->paginate(3);

        return view('Pencarian', compact('notif', 'user', 'job'));
    }

    public function filter()
    {
        $notif = Notifikasi::where('user_id', '=', auth()->user()->id)->latest()->get();

        if (request('user')) {
            $user = User::where('firstname', 'like', '%' . request('search') . '%')->orWhere('lastname', 'like', '%' . request('search'))->latest()->get();
            return view('Filter', compact('notif', 'user'));

        }

        if (request('job')) {
            $job = Job::where('title', 'like', '%' . request('search') . '%')->orWhere('company', 'like', '%' . request('search') . '%')->latest()->get();
            return view('Filter', compact('notif', 'job'));
        }

    }
}
