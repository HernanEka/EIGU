<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Portofolio::where('user_id','=', auth()->user()->id)->get();
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->latest()->get();
        return view('Portofolio', compact('portofolio','notif'));
    }

    public function portofolio(Request $request)
    {
        $request->validate([
            'foto' => 'required'
        ]);

        $porto = new Portofolio();

        $path = public_path() . '/upload/portofolio/';
        File::makeDirectory($path, $mode = 0777, true, true);

        $foto = $request->foto->getClientOriginalName() . '-' . time() . '- Portofolio -'
            . '.' . $request->foto->extension();
        $request->foto->move($path, $foto);

        $porto->user_id = auth()->user()->id;
        $porto->title = $request->title;
        $porto->foto =  $foto;
        $porto->deskripsi = $request->deskripsi;
        $porto->save();

        return back();
    }
}
