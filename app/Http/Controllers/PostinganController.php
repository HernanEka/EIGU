<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostinganController extends Controller
{
    public function posting(Request $request)
    {
        $postingan = new Postingan();

        if ($request->hasFile('foto')) {
            $path = public_path() . '/upload/postingan/foto';
            File::makeDirectory($path, $mode = 0777, true, true);

            $foto = $request->foto->getClientOriginalName() . '-' . time() . '- postingan -'
                . '.' . $request->foto->extension();
            $request->foto->move($path, $foto);
            $postingan->foto = $foto;
        }

        if ($request->hasFile('thread')) {
            $path = public_path() . '/upload/postingan/thread';
            File::makeDirectory($path, $mode = 0777, true, true);

            $thread = $request->thread->getClientOriginalName() . '-' . time() . '- postingan -'
                . '.' . $request->thread->extension();
            $request->thread->move($path, $thread);
            $postingan->thread = $thread;
        }

        if ($request->hasFile('video')) {
            $path = public_path() . '/upload/postingan/video';
            File::makeDirectory($path, $mode = 0777, true, true);

            $video = $request->video->getClientOriginalName() . '-' . time() . '- postingan -'
                . '.' . $request->video->extension();
            $request->video->move($path, $video);
            $postingan->video = $video;
        }

        $postingan->user_id = auth()->user()->id;
        $postingan->postingan = $request->posting;
        $postingan->save();

        return back();
    }
}
