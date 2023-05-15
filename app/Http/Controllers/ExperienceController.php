<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::where('user_id','=',auth()->user()->id)->get();
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest();
        return view('Experience', compact('experience','notif'));
    }

    public function addjobs(Request $request)
    {
        $jobs = new Experience();

        $jobs->user_id = auth()->user()->id;
        $jobs->title = $request->title;
        $jobs->subtitle = $request->subtitle;
        $jobs->start = $request->start;
        $jobs->end = $request->end;
        $jobs->kategori = 'Jobs';
        $jobs->deskripsi = $request->deskripsi;
        $jobs->save();

        return back();
    }

    public function addeducation(Request $request)
    {
        $education = new Experience();

        $education->user_id = auth()->user()->id;
        $education->title = $request->title;
        $education->subtitle = $request->subtitle;
        $education->start = $request->start;
        $education->end = $request->end;
        $education->kategori = 'Education';
        $education->deskripsi = $request->deskripsi;
        $education->save();

        return back();
    }

    public function addcertification(Request $request)
    {
        $certification = new Experience();

        $certification->user_id = auth()->user()->id;
        $certification->title = $request->title;
        $certification->subtitle = $request->subtitle;
        $certification->start = $request->start;
        $certification->end = $request->end;
        $certification->kategori = 'Certification';
        $certification->deskripsi = $request->deskripsi;
        $certification->save();

        return back();
    }
}
