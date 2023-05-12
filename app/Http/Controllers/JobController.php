<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    public function addjobs(Request $request)
    {
        $job = new Job();

        $path = public_path() . '/upload/job/logo';
        File::makeDirectory($path, $mode = 0777, true, true);

        $logo = $request->company.'.' . $request->logo->extension();
        $request->logo->move($path, $logo);

        $job->logo = $logo;
        $job->title = $request->title;
        $job->company = $request->company;
        $job->startdate = $request->startdate;
        $job->enddate = $request->enddate;
        $job->link = $request->link;
        $job->deskripsi = $request->deskripsi;

        $job->save();

        return back();
    }
}
