<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    public function index()
    {
        $integration = Integration::where('user_id','=',auth()->user()->id)->first();
        return view('Settings_Integration', compact('integration'));
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
}
