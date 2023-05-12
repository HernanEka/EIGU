<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function jobs()
    {
        $jobs = Job::all();
        return view('Admin_Jobs', compact('jobs'));
    }
}
