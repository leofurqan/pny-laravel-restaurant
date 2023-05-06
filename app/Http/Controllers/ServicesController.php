<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function services() {
        $services = Service::all()->toArray();
        return view('admin/services')->with('services', $services);
    }

    public function add() {
        return view('admin/add-service');
    }

    public function add_service(Request $request) {
        $service = new Service;
        $service->logo = "";
        $service->title = $request["title"];
        $service->description = $request["description"];
        $service->save();

        return redirect('/admin/services');
    }
} 
