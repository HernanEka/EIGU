<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    public function index()
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();
        $notif = Notifikasi::where('user_id','=',auth()->user()->id)->where('read','=','False')->latest()->get();
        return view('Settings_Integration', compact('integration','notif'));
    }

    public function dribbble(Request $request)
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();

        $integration->dribbble = $request->username;
        $integration->save();
        return back();
    }

    public function dribbbleuncheck()
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();

        $integration->dribbble = 'None';
        $integration->save();
        return back();
    }

    public function behance(Request $request)
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();

        $integration->behance = $request->username;
        $integration->save();
        return back();
    }

    public function behanceuncheck()
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();

        $integration->behance = 'None';
        $integration->save();
        return back();
    }

    public function github(Request $request)
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();

        $integration->github = $request->username;
        $integration->save();
        return back();
    }

    public function githubuncheck()
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();

        $integration->github = 'None';
        $integration->save();
        return back();
    }
}
