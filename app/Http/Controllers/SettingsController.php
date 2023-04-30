<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function settings() {
        return view('admin/settings');
    }
}
