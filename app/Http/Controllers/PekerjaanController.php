<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('Job',compact('jobs'));
    }
}
