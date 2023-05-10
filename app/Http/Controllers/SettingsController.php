<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function privacy()
    {
        return view('Settings_Privacy');
    }

    public function security()
    {
        return view('Settings_Security');
    }
}
