<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function home() {
        $services = Service::all()->toArray();
        return view('home')->with('services', $services);
    }

    function about() {
        return view('about');
    }

    function contact() {
        return view('contact');
    }
    
    function menu() {
        return view('menu');
    }

    function booking() {
        return view('booking');
    }
}
