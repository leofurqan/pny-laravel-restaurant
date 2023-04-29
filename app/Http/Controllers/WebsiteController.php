<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function home() {
        return view('home');
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
